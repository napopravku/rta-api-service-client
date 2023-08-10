<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

interface Factory
{
    public static function fromArray(array $array): AbstractDTO;

    public static function fromCollection(Collection $collection): AbstractDTO;
}
