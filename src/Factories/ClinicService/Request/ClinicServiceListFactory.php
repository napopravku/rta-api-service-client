<?php

namespace Napopravku\RtaApiClient\Factories\ClinicService\Request;

use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceListDTO;

class ClinicServiceListFactory extends AbstractListFactory
{
    public static function getDTO(): ClinicServiceListDTO
    {
        return new ClinicServiceListDTO();
    }
}
