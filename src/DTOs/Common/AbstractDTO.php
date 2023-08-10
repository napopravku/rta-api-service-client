<?php

namespace Napopravku\RtaApiClient\DTOs\Common;

use Carbon\Carbon;
use JsonSerializable;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Support\Arrayable;

class AbstractDTO implements DTO, JsonSerializable, Arrayable
{
    public function toArray(): array
    {
        return collect(get_object_vars($this))->mapWithKeys(static function ($value, $key) {
            if ($value instanceof self) {
                $value = $value->toArray();
            } elseif (is_array($value) || $value instanceof Arrayable) {
                if ($value instanceof Collection) {
                    $value = $value->toArray();
                }

                $value = array_map(static function (mixed $value) {
                    if ($value instanceof self) {
                        return $value->toArray();
                    }

                    return $value;
                }, $value);
            } elseif ($value instanceof Carbon) {
                $value = $value->toISOString(true);
            }

            return [Str::snake($key) => $value];
        })->toArray();
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
