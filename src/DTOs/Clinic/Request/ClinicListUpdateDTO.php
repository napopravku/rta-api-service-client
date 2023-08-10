<?php

namespace Napopravku\RtaApiClient\DTOs\Clinic\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicListUpdateDTO extends AbstractDTO
{
    /** @var Collection<ClinicUpdateDTO> */
    public Collection $clinics;
}
