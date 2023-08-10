<?php

namespace Napopravku\RtaApiClient\Factories\Appointment\Request;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentReceiveDTO;

class AppointmentReceiveFactory extends AbstractFactory
{
    public static function getDTO(): AppointmentReceiveDTO
    {
        return new AppointmentReceiveDTO();
    }
}
