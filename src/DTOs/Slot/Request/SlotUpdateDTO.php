<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Request;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotUpdateDTO extends AbstractDTO
{
    public string $from;

    public string $to;

    public ?int $duration;
}
