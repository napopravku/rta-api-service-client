<?php

namespace Napopravku\RtaApiClient\Factories\Clinic\Result;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicListUpdateResultDTO;

class ClinicListUpdateResultFactory extends AbstractFactory
{
    public static function getDTO(): ClinicListUpdateResultDTO
    {
        return new ClinicListUpdateResultDTO();
    }
}
