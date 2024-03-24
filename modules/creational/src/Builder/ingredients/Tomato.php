<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Tomato implements IngredientInterface
{
    public function __toString()
    {
        return 'Томат';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 1;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'томат',
            DeclensionTemplate::Genitive->value => 'томатов',
        ];
    }
}
