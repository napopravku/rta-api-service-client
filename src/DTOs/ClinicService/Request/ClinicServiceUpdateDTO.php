<?php

namespace Napopravku\RtaApiClient\DTOs\ClinicService\Request;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicServiceUpdateDTO extends AbstractDTO
{
    public string $misClinicId;

    public string $misServiceId;

    public string $name;

    public int $price;

    public ?string $comment;
}
