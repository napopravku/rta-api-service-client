<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Napopravku\RtaApiClient\DTOs\Common\ShortDTO;

class ShortFactory extends AbstractFactory
{
    public static function getDTO(): ShortDTO
    {
        return new ShortDTO();
    }
}
