<?php

namespace Napopravku\RtaApiClient\Factories\Clinic\Request;

use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicListDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;

class ClinicListFactory extends AbstractListFactory
{
    public static function getDTO(): ClinicListDTO
    {
        return new ClinicListDTO();
    }
}
