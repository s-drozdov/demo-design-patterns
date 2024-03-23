<?php

namespace app\modules\creational\src\FactoryMethod\factories;

use app\modules\creational\src\FactoryMethod\dishes\YakiTori;
use app\modules\creational\src\FactoryMethod\contracts\DishInterface;
use app\modules\creational\src\FactoryMethod\contracts\DishFactoryInterface;

final readonly class YakiToriFactory implements DishFactoryInterface
{
    public function create(): DishInterface
    {
        return new YakiTori();
    }
}
