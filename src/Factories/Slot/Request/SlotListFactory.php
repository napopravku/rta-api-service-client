<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Request;

use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotListDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;

class SlotListFactory extends AbstractFactory
{
    public static function getDTO(): SlotListDTO
    {
        return new SlotListDTO();
    }
}
