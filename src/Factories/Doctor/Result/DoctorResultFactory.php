<?php

namespace Napopravku\RtaApiClient\Factories\Doctor\Result;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorResultDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicShortResultDTO;

class DoctorResultFactory extends AbstractFactory
{
    public static function setClinic(?array $value): ?ClinicShortResultDTO
    {
        if (!$value) {
            return null;
        }

        return self::reader(new ClinicShortResultDTO(), $value);
    }

    public static function getDTO(): DoctorResultDTO
    {
        return new DoctorResultDTO();
    }
}
