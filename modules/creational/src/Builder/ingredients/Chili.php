<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Chili implements IngredientInterface
{
    public function __toString()
    {
        return 'Чили';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 2;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'перец чили',
            DeclensionTemplate::Genitive->value => 'перца чили',
        ];
    }
}
