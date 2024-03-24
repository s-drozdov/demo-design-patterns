<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Bacon implements IngredientInterface
{
    public function __toString()
    {
        return 'Бекон';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 6;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'бекон',
            DeclensionTemplate::Genitive->value => 'бекона',
        ];
    }
}
