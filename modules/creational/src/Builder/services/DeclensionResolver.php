<?php

namespace app\modules\creational\src\Builder\services;

use Stringable;
use app\modules\creational\src\Builder\enums\DeclensionTemplate;

final readonly class DeclensionResolver implements Stringable
{
    public function __construct(
        private DeclensionTemplate $declension,
        private array $declensionConfig,
    )
    {}

    public function __toString()
    {
        return $this->declensionConfig[$this->declension->value]
            ?? $this->declensionConfig[DeclensionTemplate::Nominative->value]
            ?? '';
    }
}