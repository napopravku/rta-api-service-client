<?php

namespace Napopravku\RtaApiClient\Factories\Clinic\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\Factories\Common\AbstractFactory;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicResultDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorShortResultDTO;

class ClinicResultFactory extends AbstractFactory
{
    public static function setDoctors(?array $value): Collection
    {
        $collect = collect();

        foreach ($value as $item) {
            $collect[] = self::reader(new DoctorShortResultDTO(), $item);
        }

        return $collect;
    }

    public static function getDTO(): ClinicResultDTO
    {
        return new ClinicResultDTO();
    }
}
