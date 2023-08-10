<?php

namespace Napopravku\RtaApiClient\Factories\Doctor\Result;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorListUpdateResultDTO;

class DoctorListUpdateResultFactory extends AbstractFactory
{
    public static function getDTO(): DoctorListUpdateResultDTO
    {
        return new DoctorListUpdateResultDTO();
    }
}
