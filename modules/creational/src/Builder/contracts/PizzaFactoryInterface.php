<?php

namespace app\modules\creational\src\Builder\contracts;

use app\modules\creational\src\Builder\aggregates\Pizza;

interface PizzaFactoryInterface
{
    public function build(): Pizza;
}
