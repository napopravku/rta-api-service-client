<?php

namespace Napopravku\RtaApiClient\DTOs\Common;

class ShortDTO extends AbstractDTO
{
    public int $id;

    public string $name;

    public ?string $comment;

    public ?string $lastActivityAt;
}
