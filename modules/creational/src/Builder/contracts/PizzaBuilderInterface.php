<?php

namespace app\modules\creational\src\Builder\contracts;

use app\modules\creational\src\Builder\enums\FormFactorRate;

interface PizzaBuilderInterface extends PizzaFactoryInterface
{
    public function setRecipeName(string $name): PizzaBuilderInterface;

    public function setFormFactorRate(FormFactorRate $formFactorRate): PizzaBuilderInterface;

    public function setDoughBasement(DoughBasementInterface $basement): PizzaBuilderInterface;

    public function addIngredient(IngredientInterface $ingredient, int $weightGrams): PizzaBuilderInterface;
}
