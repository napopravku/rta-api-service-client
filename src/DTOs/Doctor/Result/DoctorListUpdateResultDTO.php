<?php

namespace Napopravku\RtaApiClient\DTOs\Doctor\Result;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class DoctorListUpdateResultDTO extends AbstractDTO
{
    public int $created = 0;

    public int $updated = 0;

    /** @var array<string, array<int, string> */
    public array $matched = [];

    /** @var array<string, array<int, string> */
    public array $notMatched = [];
}
