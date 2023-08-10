<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;

class ListMetaFactory extends AbstractFactory
{
    public static function getDTO(): AbstractDTO
    {
        return new ListMetaDTO();
    }
}
