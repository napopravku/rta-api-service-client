<?php

namespace Napopravku\RtaApiClient\Factories\Clinic\Request;

use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicUpdateDTO;

class ClinicUpdateFactory extends AbstractFactory
{
    public static function getDTO(): ClinicUpdateDTO
    {
        return new ClinicUpdateDTO();
    }
}
