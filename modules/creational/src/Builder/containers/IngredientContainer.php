<?php

namespace app\modules\creational\src\Builder\containers;

use app\modules\creational\src\Builder\helpers\ArrayHelper;
use app\modules\creational\src\Builder\aggregates\Valuation;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

/**
 * @property Valuation[] $ingredients
 */
final class IngredientContainer
{
    private array $ingredients = [];

    public function put(IngredientInterface $ingredient, int $weightGrams): void
    {
        $foundKey = (new ArrayHelper($this->ingredients))->findKeyByValue(
            function ($currentIngredient) use ($ingredient) {
                return $currentIngredient->type::class === $ingredient::class;
            },
        );

        if ($foundKey !== null) {
            $lastIngredientState = $this->ingredients[$foundKey];
            $lastIngredientState->weightInGrams += $weightGrams;
            $this->ingredients[$foundKey] = $lastIngredientState;
        } else {
            $this->ingredients[] = new Valuation(type: $ingredient, weightInGrams: $weightGrams);
        }
    }

    public function getAll(): array
    {
        return $this->ingredients;
    }
}
