<?php

namespace Napopravku\RtaApiClient\DTOs\Clinic\Request;

use Napopravku\RtaApiClient\DTOs\Common\PagingDTO;
use Napopravku\RtaApiClient\DTOs\Common\SortingDTO;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicListDTO extends AbstractDTO
{
    public function __construct(
        public PagingDTO $paging = new PagingDTO(),
        public SortingDTO $sorting = new SortingDTO(),
        public bool $withDoctors = true,
        public bool $withoutLastActivity = false,
    ) {
    }
}
