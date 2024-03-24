<?php

namespace app\modules\creational\src\Builder\contracts;

use app\modules\creational\src\Builder\enums\FormFactorRate;

interface ScalablePriceInterface
{
    public function getPrice(FormFactorRate $formFactorRate): float;
}
