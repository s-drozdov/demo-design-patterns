<?php

namespace app\modules\creational\src\Builder\builders;

use app\modules\creational\src\Builder\dough\Thin;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;
use app\modules\creational\src\Builder\containers\IngredientContainer;
use app\modules\creational\src\Builder\contracts\PizzaBuilderInterface;
use app\modules\creational\src\Builder\contracts\DoughBasementInterface;

final class PizzaBuilder implements PizzaBuilderInterface
{
    private const DEFAULT_RECIPE_NAME = 'Кастомная пицца';

    private ?string $recipeName;
    private ?FormFactorRate $formFactorRate;
    private ?DoughBasementInterface $basement;
    private IngredientContainer $ingredients;

    public function __construct()
    {
        $this->ingredients = new IngredientContainer();
    }

    public function setRecipeName(string $name): PizzaBuilderInterface
    {
        $this->recipeName = $name;
        return $this;
    }

    public function setFormFactorRate(FormFactorRate $formFactorRate): PizzaBuilderInterface
    {
        $this->formFactorRate = $formFactorRate;
        return $this;
    }

    public function setDoughBasement(DoughBasementInterface $basement): PizzaBuilderInterface
    {
        $this->basement = $basement;
        return $this;
    }

    public function addIngredient(IngredientInterface $ingredient, int $weightGrams): PizzaBuilderInterface
    {
        $this->ingredients->put(ingredient: $ingredient, weightGrams: $weightGrams);
        return $this;
    }

    public function build(): Pizza
    {
        return new Pizza(
            recipeName: $this->recipeName ?? self::DEFAULT_RECIPE_NAME,
            formFactorRate: $this->formFactorRate ?? FormFactorRate::Medium->value,
            basement: $this->basement ?? new Thin(),
            ingredients: $this->ingredients->getAll(),
        );
    }
}
