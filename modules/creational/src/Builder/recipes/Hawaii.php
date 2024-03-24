<?php

namespace app\modules\creational\src\Builder\recipes;

use app\modules\creational\src\Builder\dough\Thick;
use app\modules\creational\src\Builder\ingredients\Ham;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\ingredients\Chicken;
use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\ingredients\Pineapple;
use app\modules\creational\src\Builder\ingredients\Mozzarella;
use app\modules\creational\src\Builder\contracts\PizzaBuilderInterface;
use app\modules\creational\src\Builder\contracts\PizzaDirectorInterface;

final readonly class Hawaii implements PizzaDirectorInterface
{
    private const RECIPE_NAME = 'Гавайская';

    public function __construct(
        private PizzaBuilderInterface $builder,
        private FormFactorRate $formFactorRate,
    )
    {}

    public function build(): Pizza
    {
        return $this->builder
            ->setRecipeName(self::RECIPE_NAME)
            ->setDoughBasement(new Thick())
            ->setFormFactorRate($this->formFactorRate)
            ->addIngredient(new Chicken(), 150)
            ->addIngredient(new Pineapple(), 150)
            ->addIngredient(new Ham(), 150)
            ->addIngredient(new Mozzarella(), 200)
            ->build();
    }
}
