<?php

namespace app\modules\creational\src\Builder\containers;

use SplObjectStorage;
use app\modules\creational\src\Builder\aggregates\Valuation;

final class IngredientContainer extends SplObjectStorage
{
    /**
     * @param Valuation $object
     * @param null $info
     */
    public function attach($object, mixed $info = null): void
    {
        if ($this->contains($object)) {
            /** @var Valuation $valuation */
            $valuation = $this->current();
            $valuation->weightInGrams += $object->weightInGrams;
            return;
        }

        parent::attach($object, $info);
    }

    /**
     * @param Valuation $object
     * @return string
     */
    public function getHash($object): string
    {
        return $object->type::class;
    }
}
