<?php

namespace app\modules\creational\src\FactoryMethod\dishes;

use app\modules\creational\src\FactoryMethod\contracts\DishInterface;

final readonly class Roll implements DishInterface
{
    public function getTasteResult(): string
    {
        return 'Мммм... Хрустящие жареные роллы!';
    }
}
