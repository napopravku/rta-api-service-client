<?php

namespace Napopravku\RtaApiClient\DTOs\Doctor\Request;

use Napopravku\RtaApiClient\DTOs\Common\PagingDTO;
use Napopravku\RtaApiClient\DTOs\Common\SortingDTO;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class DoctorListDTO extends AbstractDTO
{
    public function __construct(
        public PagingDTO $paging = new PagingDTO(),
        public SortingDTO $sorting = new SortingDTO(),
        public ?string $misClinicId = null,
        public bool $withoutLastActivity = false,
    ) {
    }
}
