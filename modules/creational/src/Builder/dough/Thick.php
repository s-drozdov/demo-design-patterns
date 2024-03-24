<?php

namespace app\modules\creational\src\Builder\dough;

use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\contracts\DoughBasementInterface;

final readonly class Thick implements DoughBasementInterface
{
    public function __toString()
    {
        return 'Толстая';
    }
    public function getDescriptionPhrase(): string
    {
        return 'мягкая, воздушная, пышная основа с румяной корочкой';
    }

    public function getPrice(FormFactorRate $formFactorRate): float
    {
        return 2 * $formFactorRate->value;
    }

    public function getWeight(FormFactorRate $formFactorRate): float
    {
        return 350 * $formFactorRate->value;
    }
}
