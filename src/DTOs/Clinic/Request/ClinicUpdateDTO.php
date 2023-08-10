<?php

namespace Napopravku\RtaApiClient\DTOs\Clinic\Request;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicUpdateDTO extends AbstractDTO
{
    public string $misClinicId;

    public string $name;

    public ?string $comment;
}
