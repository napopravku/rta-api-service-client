<?php

namespace Napopravku\RtaApiClient\Factories\Appointment\Result;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicShortResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorShortResultDTO;
use Napopravku\RtaApiClient\DTOs\Appointment\Result\AppointmentResultDTO;

class AppointmentResultFactory extends AbstractFactory
{
    public static function setClinic(?array $value): ?ClinicShortResultDTO
    {
        if (!$value) {
            return null;
        }

        return self::reader(new ClinicShortResultDTO(), $value);
    }

    public static function setDoctor(?array $value): ?DoctorShortResultDTO
    {
        if (!$value) {
            return null;
        }

        return self::reader(new DoctorShortResultDTO(), $value);
    }

    public static function getDTO(): AppointmentResultDTO
    {
        return new AppointmentResultDTO();
    }
}
