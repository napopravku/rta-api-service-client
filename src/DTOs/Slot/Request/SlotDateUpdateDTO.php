<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Request;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotDateUpdateDTO extends AbstractDTO
{
    public string $date;

    /** @var Collection<SlotUpdateDTO> */
    public Collection $slots;
}
