<?php

namespace Napopravku\RtaApiClient\DTOs\ClinicService\Result;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicServiceListUpdateResultDTO extends AbstractDTO
{
    public int $created = 0;

    public int $updated = 0;

    /** @var array<string, array<int, string> */
    public array $matched = [];

    /** @var array<string, array<int, string> */
    public array $notMatched = [];
}
