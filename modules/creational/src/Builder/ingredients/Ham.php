<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Ham implements IngredientInterface
{
    public function __toString()
    {
        return 'Ветчина';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 9;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'ветчина',
            DeclensionTemplate::Genitive->value => 'ветчины',
        ];
    }
}
