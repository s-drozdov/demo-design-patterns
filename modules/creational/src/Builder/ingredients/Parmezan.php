<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Parmezan implements IngredientInterface
{
    public function __toString()
    {
        return 'Пармезан';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 8;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'сыр Пармезан',
            DeclensionTemplate::Genitive->value => 'сыра Пармезан',
        ];
    }
}
