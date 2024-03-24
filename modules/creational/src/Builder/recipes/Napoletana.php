<?php

namespace app\modules\creational\src\Builder\recipes;

use app\modules\creational\src\Builder\dough\Thick;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\ingredients\Olive;
use app\modules\creational\src\Builder\ingredients\Tomato;
use app\modules\creational\src\Builder\ingredients\Seafood;
use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\ingredients\Mozzarella;
use app\modules\creational\src\Builder\contracts\PizzaBuilderInterface;
use app\modules\creational\src\Builder\contracts\PizzaDirectorInterface;

final readonly class Napoletana implements PizzaDirectorInterface
{
    private const RECIPE_NAME = 'Неополитано';

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
            ->addIngredient(new Tomato(), 150)
            ->addIngredient(new Seafood(), 200)
            ->addIngredient(new Olive(), 50)
            ->addIngredient(new Mozzarella(), 200)
            ->build();
    }
}
