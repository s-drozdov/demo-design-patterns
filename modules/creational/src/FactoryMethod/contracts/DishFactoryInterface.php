<?php

namespace app\modules\creational\src\FactoryMethod\contracts;

interface DishFactoryInterface
{
    public function create(): DishInterface;
}