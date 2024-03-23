<?php

namespace app\modules\creational\src\AbstractFactory\contracts;

interface CurrencyFactoryInterface
{
    public function create(): CurrencyInterface;
}
