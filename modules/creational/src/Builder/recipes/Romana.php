<?php

namespace app\modules\creational\src\Builder\recipes;

use app\modules\creational\src\Builder\dough\Thin;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\ingredients\Parmezan;
use app\modules\creational\src\Builder\ingredients\Sausages;
use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\ingredients\Zucchini;
use app\modules\creational\src\Builder\ingredients\Champignon;
use app\modules\creational\src\Builder\contracts\PizzaBuilderInterface;
use app\modules\creational\src\Builder\contracts\PizzaDirectorInterface;

final readonly class Romana implements PizzaDirectorInterface
{
    private const RECIPE_NAME = 'Римская';

    public function __construct(
        private PizzaBuilderInterface $builder,
        private FormFactorRate $formFactorRate,
    )
    {}

    public function build(): Pizza
    {
        return $this->builder
            ->setRecipeName(self::RECIPE_NAME)
            ->setDoughBasement(new Thin())
            ->setFormFactorRate($this->formFactorRate)
            ->addIngredient(new Zucchini(), 100)
            ->addIngredient(new Champignon(), 150)
            ->addIngredient(new Sausages(), 150)
            ->addIngredient(new Parmezan(), 200)
            ->build();
    }
}
