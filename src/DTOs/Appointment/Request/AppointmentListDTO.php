<?php

namespace Napopravku\RtaApiClient\DTOs\Appointment\Request;

use Napopravku\RtaApiClient\DTOs\Common\PagingDTO;
use Napopravku\RtaApiClient\DTOs\Common\SortingDTO;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class AppointmentListDTO extends AbstractDTO
{
    public function __construct(
        public PagingDTO $paging = new PagingDTO(),
        public SortingDTO $sorting = new SortingDTO(),
        public ?string $misClinicId = null,
        public ?array $uuids = null,
        public ?string $from = null,
        public ?string $to = null,
        public ?bool $isReceived = null,
        public ?bool $isCancelled = null,
    ) {
    }
}
