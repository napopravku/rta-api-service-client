<?php

namespace Napopravku\RtaApiClient\Factories\Doctor\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\Doctor\Request\DoctorListUpdateDTO;

class DoctorListUpdateFactory extends AbstractListFactory
{
    public static function setDoctors(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = DoctorUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): DoctorListUpdateDTO
    {
        return new DoctorListUpdateDTO();
    }
}
