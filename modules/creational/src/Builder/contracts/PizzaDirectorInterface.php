<?php

namespace app\modules\creational\src\Builder\contracts;

use app\modules\creational\src\Builder\enums\FormFactorRate;

interface PizzaDirectorInterface extends PizzaFactoryInterface
{
    public function __construct(
        PizzaBuilderInterface $builder,
        FormFactorRate $formFactorRate,
    );
}
