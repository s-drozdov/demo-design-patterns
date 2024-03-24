<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Onion implements IngredientInterface
{
    public function __toString()
    {
        return 'Лук репчатый';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 1;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'лук',
            DeclensionTemplate::Genitive->value => 'лука',
        ];
    }
}
