<?php

namespace app\modules\creational\src\Builder\dough;

use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\contracts\DoughBasementInterface;

final readonly class Thin implements DoughBasementInterface
{
    public function __toString()
    {
        return 'Тонкая';
    }

    public function getDescriptionPhrase(): string
    {
        return 'тонкая, эластичная основа';
    }

    public function getPrice(FormFactorRate $formFactorRate): float
    {
        return 1 * $formFactorRate->value;
    }

    public function getWeight(FormFactorRate $formFactorRate): float
    {
        return 150 * $formFactorRate->value;
    }
}
