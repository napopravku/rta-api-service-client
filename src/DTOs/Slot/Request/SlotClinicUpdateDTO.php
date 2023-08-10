<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotClinicUpdateDTO extends AbstractDTO
{
    public string $misClinicId;

    /** @var Collection<SlotDoctorUpdateDTO> */
    public Collection $doctors;
}
