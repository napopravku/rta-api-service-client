<?php

namespace Napopravku\RtaApiClient\Exceptions;

use Exception;
use Napopravku\RtaApiClient\Remote\HttpClient;

class RtaApiRemoteInvalidMethodException extends Exception
{
    public function __construct()
    {
        parent::__construct('Некорректно указан тип для запроса, доступны: POST и GET.', HttpClient::HTTP_INTERNAL_SERVER_ERROR);
    }
}
