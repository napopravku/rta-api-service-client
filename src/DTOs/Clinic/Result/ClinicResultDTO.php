<?php

namespace Napopravku\RtaApiClient\DTOs\Clinic\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\ShortDTO;
use Napopravku\RtaApiClient\DTOs\Doctor\Result\DoctorShortResultDTO;

class ClinicResultDTO extends ShortDTO
{
    public string $misClinicId;

    /** @var Collection<DoctorShortResultDTO> */
    public Collection $doctors;
}
