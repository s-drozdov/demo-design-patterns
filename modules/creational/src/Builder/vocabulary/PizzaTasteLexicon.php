<?php

namespace app\modules\creational\src\Builder\vocabulary;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\aggregates\LexiconExpression;

final readonly class PizzaTasteLexicon
{
    /**
     * @return LexiconExpression[]
     */
    public function getVocabulary(): array
    {
        return [
            new LexiconExpression(
                declension: DeclensionTemplate::Genitive,
                expression: 'c тонкими нотками ' . DeclensionTemplate::Genitive->value,
            ),
            new LexiconExpression(
                declension: DeclensionTemplate::Genitive,
                expression: 'имеет насыщенный вкус ' . DeclensionTemplate::Genitive->value,
            ),
            new LexiconExpression(
                declension: DeclensionTemplate::Genitive,
                expression: 'ярко выражена текстура ' . DeclensionTemplate::Genitive->value,
            ),
            new LexiconExpression(
                declension: DeclensionTemplate::Genitive,
                expression: 'легкий оттенок ' . DeclensionTemplate::Genitive->value . ' вызывает бурный аппетит',
            ),
            new LexiconExpression(
                declension: DeclensionTemplate::Nominative,
                expression: DeclensionTemplate::Nominative->value . ' придает блюду уникальный вид',
            ),
            new LexiconExpression(
                declension: DeclensionTemplate::Genitive,
                expression: 'остается приятное послевкусие за счет едва уловимой консистенции ' . DeclensionTemplate::Genitive->value,
            ),
            new LexiconExpression(
                declension: DeclensionTemplate::Genitive,
                expression: 'едва заметный запах ' . DeclensionTemplate::Genitive->value . ' будоражит воображение',
            ),
        ];
    }
}
