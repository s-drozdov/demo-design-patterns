<?php

namespace app\modules\creational\src\Builder\helpers;

final readonly class StringHelper
{
    public function __construct(
        protected string $target,
    )
    {}

    /** Аналог ucfirst для русских символов */
    public function ucFirstAdditionalCodepages(): string
    {
        return mb_strtoupper(mb_substr($this->target, 0, 1)) . mb_substr($this->target, 1);
    }
}
