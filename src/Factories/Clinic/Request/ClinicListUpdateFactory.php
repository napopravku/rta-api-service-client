<?php

namespace Napopravku\RtaApiClient\Factories\Clinic\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Request\ClinicListUpdateDTO;

class ClinicListUpdateFactory extends AbstractListFactory
{
    public static function setClinics(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = ClinicUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): ClinicListUpdateDTO
    {
        return new ClinicListUpdateDTO();
    }
}
