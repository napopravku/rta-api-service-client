<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotListUpdateDTO extends AbstractDTO
{
    /** @var Collection<SlotClinicUpdateDTO> */
    public Collection $clinics;
}
