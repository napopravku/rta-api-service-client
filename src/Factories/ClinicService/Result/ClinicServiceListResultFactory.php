<?php

namespace Napopravku\RtaApiClient\Factories\ClinicService\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\Factories\Common\ListMetaFactory;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceResultDTO;
use Napopravku\RtaApiClient\DTOs\ClinicService\Result\ClinicServiceListResultDTO;

class ClinicServiceListResultFactory extends AbstractFactory
{
    /**
     * @return Collection<ClinicServiceResultDTO>
     */
    public static function setItems(?array $value): Collection
    {
        if (!$value) {
            return collect();
        }

        $values = collect();

        foreach ($value as $item) {
            $values[] = ClinicServiceResultFactory::fromArray($item);
        }

        return $values;
    }

    public static function setMeta(?array $value): ListMetaDTO
    {
        return ListMetaFactory::fromArray($value);
    }

    public static function getDTO(): ClinicServiceListResultDTO
    {
        return new ClinicServiceListResultDTO();
    }
}
