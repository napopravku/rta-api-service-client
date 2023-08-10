<?php

namespace Napopravku\RtaApiClient\Factories\Slot\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Slot\Result\SlotResultDTO;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Slot\Result\SlotListResultDTO;

class SlotListResultFactory extends AbstractFactory
{
    /**
     * @return Collection<string, Collection<SlotResultDTO>>
     */
    public static function setItems(?array $value): Collection
    {
        if (!$value) {
            return collect();
        }

        $values = [];

        foreach ($value as $date => $slots) {
            $values[$date] = [];

            foreach ($slots as $slot) {
                $values[$date][] = SlotResultFactory::fromArray($slot);
            }
        }

        return collect($values);
    }

    public static function getDTO(): SlotListResultDTO
    {
        return new SlotListResultDTO();
    }
}
