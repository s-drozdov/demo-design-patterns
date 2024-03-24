<?php

namespace app\modules\creational\src\Builder\formatters;

use Stringable;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\generators\LexiconGenerator;

final class PizzaTasteDescription implements Stringable
{
    public function __construct(
        private Pizza $pizza,
        private array $vocabulary,
    )
    {
        shuffle($this->vocabulary);
    }

    public function __toString()
    {
        $expressions = [];

        foreach ((new LexiconGenerator(
            ingredients: $this->pizza->ingredients,
            lexicon: $this->vocabulary,
        ))->get() as $expression) {
            $expressions[] = $expression;
        }

        return 'Представляем Вашему вниманию пиццу по знаменитому рецепту "'
            . $this->pizza->recipeName
            . '". Эти ощущения Вы никогда не забудете: '
            . $this->pizza->basement->getDescriptionPhrase()
            . (empty($expressions) ? '' : ', ' . implode(', ', $expressions))
            . '.';
    }
}
