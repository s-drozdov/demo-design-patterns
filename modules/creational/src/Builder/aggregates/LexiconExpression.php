<?php

namespace app\modules\creational\src\Builder\aggregates;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;

final readonly class LexiconExpression
{
    public function __construct(
        public DeclensionTemplate $declension,
        public string $expression,
    )
    {}
}
