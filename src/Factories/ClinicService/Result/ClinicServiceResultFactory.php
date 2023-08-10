<?php

namespace Napopravku\RtaApiClient\Factories\ClinicService\Result;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceResultDTO;

class ClinicServiceResultFactory extends AbstractFactory
{
    public static function getDTO(): ClinicServiceResultDTO
    {
        return new ClinicServiceResultDTO();
    }
}
