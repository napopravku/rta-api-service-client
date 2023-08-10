<?php

namespace Napopravku\RtaApiClient\DTOs\Appointment\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;

class AppointmentListResultDTO extends AbstractDTO
{
    /** @var Collection<AppointmentResultDTO> */
    public Collection $items;

    public ListMetaDTO $meta;
}
