<?php

namespace Napopravku\RtaApiClient\Factories\Common;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Napopravku\RtaApiClient\DTOs\Common\AbstractDTO;

abstract class AbstractFactory implements Factory
{
    public static function fromArray(array $array): AbstractDTO
    {
        return static::fromCollection(collect($array));
    }

    public static function fromCollection(Collection $collection): AbstractDTO
    {
        $dto = static::getDTO();

        return self::reader($dto, $collection);
    }

    /**
     * @template T
     *
     * @param T $class
     *
     * @return T
     */
    protected static function reader(AbstractDTO $class, Collection|array $collection): AbstractDTO
    {
        foreach ($collection as $key => $value) {
            $key = Str::studly($key);
            $lcFirstKey = lcfirst($key);

            if (method_exists(static::class, 'set' . $key)) {
                $value = static::{'set' . $key}($value);
            }

            if (property_exists($class, $lcFirstKey)) {
                $class->{$lcFirstKey} = $value;
            }
        }

        return $class;
    }

    abstract public static function getDTO(): AbstractDTO;
}
