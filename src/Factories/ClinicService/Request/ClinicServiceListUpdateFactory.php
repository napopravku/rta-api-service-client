<?php

namespace Napopravku\RtaApiClient\Factories\ClinicService\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\Factories\Common\AbstractListFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Request\ClinicServiceListUpdateDTO;

class ClinicServiceListUpdateFactory extends AbstractListFactory
{
    public static function setClinicServices(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = ClinicServiceUpdateFactory::fromArray($item);
        }

        return $collect;
    }

    public static function getDTO(): ClinicServiceListUpdateDTO
    {
        return new ClinicServiceListUpdateDTO();
    }
}
