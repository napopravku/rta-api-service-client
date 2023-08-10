<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Result;

use Napopravku\RtaApiClient\DTOs\Common\ShortDTO;

class SlotResultDTO extends ShortDTO
{
    public string $from;

    public string $to;
}
