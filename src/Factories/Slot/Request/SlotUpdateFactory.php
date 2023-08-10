<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Request;

use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotUpdateDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;

class SlotUpdateFactory extends AbstractFactory
{
    public static function getDTO(): SlotUpdateDTO
    {
        return new SlotUpdateDTO();
    }
}
