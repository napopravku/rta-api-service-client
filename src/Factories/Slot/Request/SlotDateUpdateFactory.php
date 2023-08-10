<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotDateUpdateDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;

class SlotDateUpdateFactory extends AbstractListFactory
{
    public static function setSlots(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = SlotUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): SlotDateUpdateDTO
    {
        return new SlotDateUpdateDTO();
    }
}
