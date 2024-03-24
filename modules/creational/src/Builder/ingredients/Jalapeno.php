<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\traits\Inbowable;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Jalapeno implements IngredientInterface
{
    use Inbowable;

    public function getTitle(): string
    {
        return 'халапеньо';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 2;
    }
}
