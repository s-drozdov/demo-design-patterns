<?php

namespace app\modules\creational\src\Builder\helpers;

final readonly class ArrayHelper
{
    public function __construct(
        protected array $target,
    )
    {}

    /**
     * @param callable(mixed, int|string): boolean $callback
     * @return int|string|null ключ первого подходящего значения
     */
    public function findKeyByValue(callable $callback): int|string|null
    {
        foreach ($this->target as $key => $item) {
            if ($callback($item, $key)) {
                return $key;
            }
        }

        return null;
    }
}
