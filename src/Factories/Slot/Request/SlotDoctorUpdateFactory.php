<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotDoctorUpdateDTO;

class SlotDoctorUpdateFactory extends AbstractListFactory
{
    public static function setDates(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = SlotDateUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): SlotDoctorUpdateDTO
    {
        return new SlotDoctorUpdateDTO();
    }
}
