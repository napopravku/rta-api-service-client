<?php

namespace Napopravku\RtaApiClient\Factories\Clinic\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\Factories\Common\ListMetaFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicResultDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicListResultDTO;

class ClinicListResultFactory extends AbstractFactory
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
            $values[] = ClinicResultFactory::fromArray($item);
        }

        return $values;
    }

    public static function setMeta(?array $value): ListMetaDTO
    {
        return ListMetaFactory::fromArray($value);
    }

    public static function getDTO(): ClinicListResultDTO
    {
        return new ClinicListResultDTO();
    }
}
