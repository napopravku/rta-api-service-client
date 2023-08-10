<?php

namespace Napopravku\RtaApiClient\Factories\Doctor\Request;

use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorListDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;

class DoctorListFactory extends AbstractListFactory
{
    public static function getDTO(): DoctorListDTO
    {
        return new DoctorListDTO();
    }
}
