<?php

namespace Napopravku\RtaApiClient\DTOs\Doctor\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;

class DoctorListResultDTO extends AbstractDTO
{
    /** @var Collection<DoctorResultDTO> */
    public Collection $items;

    public ListMetaDTO $meta;
}
