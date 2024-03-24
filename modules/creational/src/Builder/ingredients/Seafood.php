<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\traits\Inbowable;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Seafood implements IngredientInterface
{
    use Inbowable;

    public function getTitle(): string
    {
        return 'ассорти морепродуктов';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 12;
    }
}
