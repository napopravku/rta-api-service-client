<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Napopravku\RtaApiClient\DTOs\Common\SortingDTO;

class SortingFactory extends AbstractFactory
{
    public const SORT_BY = 'sort_by';

    public const SORT_DIR = 'sort_dir';

    public static function getDTO(): SortingDTO
    {
        return new SortingDTO();
    }
}
