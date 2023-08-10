<?php

namespace Napopravku\RtaApiClient\DTOs\Common;

class SortingDTO extends AbstractDTO
{
    public const SORT_DIR_ASC = 'asc';

    public const SORT_DIR_DESC = 'desc';

    public ?string $sortBy = null;

    public ?string $sortDir = null;
}
