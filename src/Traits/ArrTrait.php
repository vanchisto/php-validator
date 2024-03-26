<?php

declare(strict_types=1);

namespace Vanchisto\Validator\Traits;

trait ArrTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array $value
     */
    public static function isArr(mixed $value): bool
    {
        return is_array($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLen(mixed $value): bool
    {
        return static::isArr($value) && count($value);
    }
}
