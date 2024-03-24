<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Olive implements IngredientInterface
{
    public function __toString()
    {
        return 'Оливки';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 4;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => 'нарезка оливок',
            DeclensionTemplate::Genitive->value => 'нарезки оливок',
        ];
    }
}
