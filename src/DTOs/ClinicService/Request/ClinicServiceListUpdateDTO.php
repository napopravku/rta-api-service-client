<?php

namespace Napopravku\RtaApiClient\DTOs\ClinicService\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicServiceListUpdateDTO extends AbstractDTO
{
    /** @var Collection<ClinicServiceUpdateDTO> */
    public Collection $clinicServices;
}
