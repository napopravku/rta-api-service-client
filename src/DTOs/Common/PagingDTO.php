<?php

namespace Napopravku\RtaApiClient\DTOs\Common;

class PagingDTO extends AbstractDTO
{
    public const PER_PAGE = 10;

    public const MAX_PER_PAGE = 100;

    public function __construct(
        public int $page = 1,
        public int $perPage = self::PER_PAGE
    ) {
    }
}
