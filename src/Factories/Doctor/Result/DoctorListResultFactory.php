<?php

namespace Napopravku\RtaApiClient\Factories\Doctor\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\Factories\Common\ListMetaFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorListResultDTO;

class DoctorListResultFactory extends AbstractFactory
{
    /**
     * @return Collection<ClinicResultDTO>
     */
    public static function setItems(?array $value): Collection
    {
        if (!$value) {
            return collect();
        }

        $values = collect();

        foreach ($value as $item) {
            $values[] = DoctorResultFactory::fromArray($item);
        }

        return $values;
    }

    public static function setMeta(?array $value): ListMetaDTO
    {
        return ListMetaFactory::fromArray($value);
    }

    public static function getDTO(): DoctorListResultDTO
    {
        return new DoctorListResultDTO();
    }
}
