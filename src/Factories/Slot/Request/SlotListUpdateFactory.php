<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotListUpdateDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;

class SlotListUpdateFactory extends AbstractListFactory
{
    public static function setClinics(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = SlotClinicUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): SlotListUpdateDTO
    {
        return new SlotListUpdateDTO();
    }
}
