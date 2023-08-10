<?php

namespace Napopravku\RtaApiClient\DTOs\ClinicService\Result;

use Napopravku\RtaApiClient\DTOs\Common\ShortDTO;

class ClinicServiceResultDTO extends ShortDTO
{
    public string $misServiceId;

    public int $price;
}
