<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Napopravku\RtaApiClient\DTOs\Common\PagingDTO;

class PagingFactory extends AbstractFactory
{
    public const PAGE = 'page';

    public const PER_PAGE = 'per_page';

    public static function getDTO(): PagingDTO
    {
        return new PagingDTO();
    }
}
