<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\Slot\Request\SlotClinicUpdateDTO;

class SlotClinicUpdateFactory extends AbstractListFactory
{
    public static function setDoctors(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = SlotDoctorUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): SlotClinicUpdateDTO
    {
        return new SlotClinicUpdateDTO();
    }
}
