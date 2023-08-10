<?php

namespace Napopravku\RtaApiClient\Factories\ClinicService\Request;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceUpdateDTO;

class ClinicServiceUpdateFactory extends AbstractFactory
{
    public static function getDTO(): ClinicServiceUpdateDTO
    {
        return new ClinicServiceUpdateDTO();
    }
}
