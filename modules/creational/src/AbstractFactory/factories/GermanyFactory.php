<?php

namespace app\modules\creational\src\AbstractFactory\factories;

use app\modules\creational\src\AbstractFactory\currencies\Euro;
use app\modules\creational\src\AbstractFactory\capitals\Berlin;
use app\modules\creational\src\AbstractFactory\languages\German;
use app\modules\creational\src\AbstractFactory\countryNames\Germany;
use app\modules\creational\src\AbstractFactory\contracts\CapitalInterface;
use app\modules\creational\src\AbstractFactory\contracts\CurrencyInterface;
use app\modules\creational\src\AbstractFactory\contracts\LanguageInterface;
use app\modules\creational\src\AbstractFactory\contracts\CountryNameInterface;
use app\modules\creational\src\AbstractFactory\contracts\CountryAbstractFactoryInterface;

final readonly class GermanyFactory implements CountryAbstractFactoryInterface
{
    public function createCapital(): CapitalInterface
    {
        return new Berlin();
    }

    public function createCurrency(): CurrencyInterface
    {
        return new Euro();
    }

    public function createLanguage(): LanguageInterface
    {
        return new German();
    }

    public function createCountryName(): CountryNameInterface
    {
        return new Germany();
    }
}
