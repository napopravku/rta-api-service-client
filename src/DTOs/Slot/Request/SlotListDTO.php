<?php

namespace Napopravku\RtaApiClient\DTOs\Slot\Request;

use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class SlotListDTO extends AbstractDTO
{
    public function __construct(
        public ?string $misClinicId = null,
        public ?string $misDoctorId = null,
        public ?string $from = null,
        public ?string $to = null,
    ) {
    }
}
