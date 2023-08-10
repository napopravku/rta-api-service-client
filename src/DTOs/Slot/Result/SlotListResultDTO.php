<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotListResultDTO extends AbstractDTO
{
    /** @var Collection<string, Collection<SlotResultDTO>> */
    public Collection $items;
}
