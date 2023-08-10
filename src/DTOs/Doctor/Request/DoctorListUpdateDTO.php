<?php

namespace Napopravku\RtaApiClient\DTOs\Doctor\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class DoctorListUpdateDTO extends AbstractDTO
{
    /** @var Collection<DoctorUpdateDTO> */
    public Collection $doctors;
}
