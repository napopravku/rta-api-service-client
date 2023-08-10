<?php

namespace Napopravku\RtaApiClient\Factories\ClinicService\Result;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceListUpdateResultDTO;

class ClinicServiceListUpdateResultFactory extends AbstractFactory
{
    public static function getDTO(): ClinicServiceListUpdateResultDTO
    {
        return new ClinicServiceListUpdateResultDTO();
    }
}
