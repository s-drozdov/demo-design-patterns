<?php

namespace app\modules\creational\src\Builder\contracts;

use Stringable;

interface IngredientInterface extends Stringable, DeclensionInterface
{
    public function getPriceInUsdPerKilo(): int;
}
