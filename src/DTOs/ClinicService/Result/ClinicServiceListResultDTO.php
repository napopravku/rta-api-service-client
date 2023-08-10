<?php

namespace Napopravku\RtaApiClient\DTOs\ClinicService\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;

class ClinicServiceListResultDTO extends AbstractDTO
{
    /** @var Collection<ClinicServiceResultDTO> */
    public Collection $items;

    public ListMetaDTO $meta;
}
