<?php

namespace Napopravku\RtaApiClient\DTOs\Doctor\Result;

use Napopravku\RtaApiClient\DTOs\Common\ShortDTO;
use Napopravku\RtaApiClient\DTOs\Clinic\Result\ClinicShortResultDTO;

class DoctorResultDTO extends ShortDTO
{
    public string $misDoctorId;

    public ClinicShortResultDTO $clinic;
}
