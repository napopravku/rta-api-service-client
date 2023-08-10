<?php

namespace Napopravku\RtaApiClient\DTOs\Doctor\Request;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class DoctorUpdateDTO extends AbstractDTO
{
    public string $misDoctorId;

    public string $name;

    public ?string $comment;

    /** @var int[] */
    public array $misClinicIds;
}
