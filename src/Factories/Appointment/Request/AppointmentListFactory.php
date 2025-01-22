<?php

namespace Napopravku\RtaApiClient\Factories\Appointment\Request;

use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\Appointment\Request\AppointmentListDTO;

class AppointmentListFactory extends AbstractListFactory
{
    public static function getDTO(): AppointmentListDTO
    {
        return new AppointmentListDTO();
    }
}
