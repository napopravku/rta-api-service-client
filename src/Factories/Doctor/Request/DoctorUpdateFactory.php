<?php

namespace Napopravku\RtaApiClient\Factories\Doctor\Request;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorUpdateDTO;

class DoctorUpdateFactory extends AbstractFactory
{
    public static function getDTO(): DoctorUpdateDTO
    {
        return new DoctorUpdateDTO();
    }
}
