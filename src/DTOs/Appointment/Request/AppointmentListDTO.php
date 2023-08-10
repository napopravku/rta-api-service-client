<?php

namespace Napopravku\RtaApiClient\DTOs\Appointment\Request;

use Carbon\Carbon;
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
        public ?Carbon $from = null,
        public ?Carbon $to = null,
        public ?bool $isReceived = null,
        public ?bool $isCancelled = null,
    ) {
    }
}
