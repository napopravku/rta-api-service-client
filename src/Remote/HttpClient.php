<?php

namespace Napopravku\RtaApiClient\Remote;

use JsonException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Napopravku\RtaApiClient\Exceptions\RtaApiAuthException;
use Napopravku\RtaApiClient\Exceptions\RtaApiRemoteException;
use Napopravku\RtaApiClient\Exceptions\RtaApiNotFoundException;
use Napopravku\RtaApiClient\Exceptions\RtaApiValidationException;
use Napopravku\RtaApiClient\Exceptions\RtaApiRemoteInvalidMethodException;

class HttpClient
{
    public const HOST = 'https://rta-api.napopravku.ru/api/v1/';

    private const METHOD_GET = 'GET';

    private const METHOD_POST = 'POST';

    public const HTTP_INTERNAL_SERVER_ERROR = 500;

    public const HTTP_UNAUTHORIZED = 401;

    public const HTTP_NOT_FOUND = 404;

    public const HTTP_UNPROCESSABLE_ENTITY = 422;

    protected ClientInterface $httpClient;

    public function __construct(string $baseUri, string $token = '', ?callable $logRequestMiddleware = null, ?callable $loggerMiddleware = null)
    {
        $headers = [
            'Accept'        => 'application/json',
            'Authorization' => "Bearer $token",
        ];

        $config = [
            'base_uri' => $baseUri,
            'headers'  => $headers,
        ];

        if ($logRequestMiddleware !== null && $loggerMiddleware !== null) {
            $stackHandler = HandlerStack::create();
            $stackHandler->unshift($logRequestMiddleware);
            $stackHandler->unshift($loggerMiddleware);

            $config = array_merge([
                'handler' => $stackHandler,
            ], $config);
        }

        $this->httpClient = new GuzzleHttpClient($config);
    }

    /**
     * @throws RtaApiNotFoundException
     * @throws RtaApiAuthException
     * @throws RtaApiRemoteException
     * @throws GuzzleException
     * @throws RtaApiValidationException
     * @throws JsonException
     * @throws RtaApiRemoteInvalidMethodException
     */
    public function requestGet(
        string $uri,
        array $data = []
    ): mixed {
        return $this->request(self::METHOD_GET, $uri, $data);
    }

    /**
     * @throws RtaApiNotFoundException
     * @throws RtaApiAuthException
     * @throws RtaApiRemoteException
     * @throws RtaApiValidationException
     * @throws JsonException
     * @throws GuzzleException
     * @throws RtaApiRemoteInvalidMethodException
     */
    public function requestPost(
        string $uri,
        array $data = []
    ): mixed {
        return $this->request(self::METHOD_POST, $uri, $data);
    }

    /**
     * @throws RtaApiRemoteException
     * @throws RtaApiNotFoundException
     * @throws RtaApiAuthException
     * @throws GuzzleException
     * @throws RtaApiValidationException
     * @throws JsonException
     * @throws RtaApiRemoteInvalidMethodException
     */
    private function request(string $method, string $uri, array $data = [])
    {
        $option = match ($method) {
            self::METHOD_GET  => RequestOptions::QUERY,
            self::METHOD_POST => RequestOptions::JSON,
            default           => throw new RtaApiRemoteInvalidMethodException()
        };

        try {
            $response = $this->httpClient->request($method, $uri, [
                $option => $data,
            ]);
        } catch (ConnectException $exception) {
            throw new RtaApiRemoteException($exception->getMessage(), self::HTTP_INTERNAL_SERVER_ERROR);
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
            $code = $response?->getStatusCode();

            if (in_array($code, [self::HTTP_UNAUTHORIZED, self::HTTP_NOT_FOUND, self::HTTP_UNPROCESSABLE_ENTITY], true)) {
                try {
                    $contents = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

                    $message = $contents['message'] ?? 'Произошла неизвестная ошибка';
                    $errors = $contents['errors'] ?? [];
                } catch (JsonException $exception) {
                    $message = $exception->getMessage();
                }
            }

            throw match ($code) {
                self::HTTP_UNAUTHORIZED         => new RtaApiAuthException($message ?? $exception->getMessage(), $code),
                self::HTTP_NOT_FOUND            => new RtaApiNotFoundException($message ?? $exception->getMessage(), $code),
                self::HTTP_UNPROCESSABLE_ENTITY => new RtaApiValidationException($message ?? $exception->getMessage(), $errors ?? []),
                default                         => new RtaApiRemoteException($exception->getMessage(), self::HTTP_INTERNAL_SERVER_ERROR),
            };
        }

        return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR)['result'];
    }
}
