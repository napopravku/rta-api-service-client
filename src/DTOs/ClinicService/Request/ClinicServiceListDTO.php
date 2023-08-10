<?php

namespace Napopravku\RtaApiClient\DTOs\ClinicService\Request;

use Napopravku\RtaApiClient\DTOs\Common\PagingDTO;
use Napopravku\RtaApiClient\DTOs\Common\SortingDTO;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

class ClinicServiceListDTO extends AbstractDTO
{
    public function __construct(
        public PagingDTO $paging = new PagingDTO(),
        public SortingDTO $sorting = new SortingDTO(),
        public bool $withoutLastActivity = false,
        public ?string $misClinicId = null,
    ) {
    }
}
