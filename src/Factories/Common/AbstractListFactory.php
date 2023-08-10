<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Napopravku\RtaApiClient\DTOs\Common\PagingDTO;
use Napopravku\RtaApiClient\DTOs\Common\SortingDTO;

abstract class AbstractListFactory extends AbstractFactory
{
    public static function setPaging(?array $value): ?PagingDTO
    {
        if (!$value) {
            return new PagingDTO();
        }

        return self::reader(new PagingDTO(), $value);
    }

    public static function setSorting(?array $value): ?SortingDTO
    {
        if (!$value) {
            return new SortingDTO();
        }

        return self::reader(new SortingDTO(), $value);
    }
}
