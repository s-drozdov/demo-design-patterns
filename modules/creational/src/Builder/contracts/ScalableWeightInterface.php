<?php

namespace app\modules\creational\src\Builder\contracts;

use app\modules\creational\src\Builder\enums\FormFactorRate;

interface ScalableWeightInterface
{
    public function getWeight(FormFactorRate $formFactorRate): float;
}
