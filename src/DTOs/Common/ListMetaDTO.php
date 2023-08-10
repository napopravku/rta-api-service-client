<?php

namespace Napopravku\RtaApiClient\DTOs\Common;

class ListMetaDTO extends AbstractDTO
{
    public int $total;

    public int $perPage;

    public int $page;

    public ?int $from = null;

    public ?int $to = null;

    public int $lastPage;
}
