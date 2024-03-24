<?php

namespace app\modules\creational\src\Builder\aggregates;

use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\contracts\ValuationInterface;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final class Valuation implements ValuationInterface
{
    public function __construct(
        public IngredientInterface $type,
        public int                 $weightInGrams = 0,
    )
    {}

    public function getPrice(FormFactorRate $formFactorRate): float
    {
        return round(
            $this->type->getPriceInUsdPerKilo() * $formFactorRate->value * $this->weightInGrams / 1000,
            2,
        );
    }

    public function getWeight(FormFactorRate $formFactorRate): float
    {
        return $this->weightInGrams * $formFactorRate->value;
    }
}
