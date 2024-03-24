<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Mozzarella implements IngredientInterface
{
    public function __toString()
    {
        return 'Моцарелла';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 6;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'сыр Моцарелла',
            DeclensionTemplate::Genitive->value => 'сыра Моцарелла',
        ];
    }
}
