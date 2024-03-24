<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Pineapple implements IngredientInterface
{
    public function __toString()
    {
        return 'Ананас';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 10;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'ананас',
            DeclensionTemplate::Genitive->value => 'ананаса',
        ];
    }
}
