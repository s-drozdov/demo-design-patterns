<?php

namespace app\modules\creational\src\Builder\generators;

use Generator;
use app\modules\creational\src\Builder\aggregates\Valuation;
use app\modules\creational\src\Builder\services\DeclensionResolver;
use app\modules\creational\src\Builder\aggregates\LexiconExpression;

final class LexiconGenerator
{
    /**
     * @param Valuation[] $ingredients
     * @param LexiconExpression[] $lexicon
     */
    public function __construct(
        private array $ingredients,
        private array $lexicon,
    )
    {}

    public function get(): Generator
    {
        foreach ($this->ingredients as $ingredient) {
            $lexicon = next($this->lexicon);
            yield str_replace(
                $lexicon->declension->value,
                new DeclensionResolver(
                    declension: $lexicon->declension,
                    declensionConfig: $ingredient->type->getDeclensionConfig(),
                ),
                $lexicon->expression,
            );
        }
    }
}