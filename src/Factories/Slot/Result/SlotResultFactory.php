<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Result;

use Napopravku\RtaApiClient\DTOs\Slot\Result\SlotResultDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;

class SlotResultFactory extends AbstractFactory
{
    public static function getDTO(): SlotResultDTO
    {
        return new SlotResultDTO();
    }
}
