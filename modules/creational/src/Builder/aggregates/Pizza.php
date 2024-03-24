<?php

namespace app\modules\creational\src\Builder\aggregates;

use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\contracts\DoughBasementInterface;

/**
 * @property Valuation[] $ingredients
 */
final class Pizza
{
    public function __construct(
        public string $recipeName,
        public FormFactorRate $formFactorRate,
        public DoughBasementInterface $basement,
        public array $ingredients,
    )
    {}
}
