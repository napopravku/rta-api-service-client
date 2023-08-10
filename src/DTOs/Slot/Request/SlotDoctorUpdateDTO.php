<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotDoctorUpdateDTO extends AbstractDTO
{
    public string $misDoctorId;

    /** @var Collection<SlotDateUpdateDTO> */
    public Collection $dates;
}
