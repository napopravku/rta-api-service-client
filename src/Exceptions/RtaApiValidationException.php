<?php

namespace Napopravku\RtaApiClient\Exceptions;

use Napopravku\RtaApiClient\Remote\HttpClient;

class RtaApiValidationException extends RtaApiRemoteException
{
    public array $errors = [];

    public function __construct(string $message = '', array $errors = [])
    {
        parent::__construct($message, HttpClient::HTTP_UNPROCESSABLE_ENTITY);

        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
