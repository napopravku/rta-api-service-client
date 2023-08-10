<?php

namespace Napopravku\RtaApiClient\Factories\Appointment\Request;

use Carbon\Carbon;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentListDTO;

class AppointmentListFactory extends AbstractListFactory
{
    public static function setFrom(?string $value): ?Carbon
    {
        if (!$value) {
            return null;
        }

        return Carbon::parse($value);
    }

    public static function setTo(?string $value): ?Carbon
    {
        if (!$value) {
            return null;
        }

        return Carbon::parse($value);
    }

    public static function getDTO(): AppointmentListDTO
    {
        return new AppointmentListDTO();
    }
}
