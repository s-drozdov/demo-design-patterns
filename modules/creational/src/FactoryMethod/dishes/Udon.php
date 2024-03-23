<?php

namespace app\modules\creational\src\FactoryMethod\dishes;

use app\modules\creational\src\FactoryMethod\contracts\DishInterface;

final readonly class Udon implements DishInterface
{
    public function getTasteResult(): string
    {
        return 'Нет ничего аппетитнее свежего горячего Udon!';
    }
}
