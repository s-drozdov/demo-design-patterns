<?php

namespace app\modules\creational\src\AbstractFactory\currencies;

use app\modules\creational\src\AbstractFactory\contracts\CurrencyInterface;

final readonly class Euro implements CurrencyInterface
{
    public function getCurrency(): string
    {
        return 'евро';
    }
}
