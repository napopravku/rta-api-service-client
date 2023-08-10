<?php

namespace Napopravku\RtaApiClient\DTOs\Clinic\Result;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;
use Napopravku\RtaApiClient\DTOs\Common\ListMetaDTO;

class ClinicListResultDTO extends AbstractDTO
{
    /** @var Collection<ClinicResultDTO> */
    public Collection $items;

    public ListMetaDTO $meta;
}
