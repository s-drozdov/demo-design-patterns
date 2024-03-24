<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Chicken implements IngredientInterface
{
    public function __toString()
    {
        return 'Мясо цыпленка';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 3;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'россыпь кусочков курицы',
            DeclensionTemplate::Genitive->value => 'кусочков курицы',
        ];
    }
}
