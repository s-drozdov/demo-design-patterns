<?php

namespace app\modules\creational\src\Builder\repositories;

use app\modules\creational\src\Builder\contracts\RepositoryInterface;

/**
 * @property string[] $items
 */
final readonly class RecipeRepository implements RepositoryInterface
{
    public function __construct(
        private array $items = [
            \app\modules\creational\src\Builder\recipes\Carbonara::class,
            \app\modules\creational\src\Builder\recipes\Diabolo::class,
            \app\modules\creational\src\Builder\recipes\Hawaii::class,
            \app\modules\creational\src\Builder\recipes\Margherita::class,
            \app\modules\creational\src\Builder\recipes\Mexicano::class,
            \app\modules\creational\src\Builder\recipes\Napoletana::class,
            \app\modules\creational\src\Builder\recipes\Romana::class,
        ],
    )
    {}

    public function getAll(): array
    {
        return $this->items;
    }
}
