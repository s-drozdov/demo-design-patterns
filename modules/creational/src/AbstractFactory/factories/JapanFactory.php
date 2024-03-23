<?php

namespace app\modules\creational\src\AbstractFactory\factories;

use app\modules\creational\src\AbstractFactory\capitals\Tokyo;
use app\modules\creational\src\AbstractFactory\countryNames\Japan;
use app\modules\creational\src\AbstractFactory\languages\Japanese;
use app\modules\creational\src\AbstractFactory\currencies\JapaneseYen;
use app\modules\creational\src\AbstractFactory\contracts\CapitalInterface;
use app\modules\creational\src\AbstractFactory\contracts\CurrencyInterface;
use app\modules\creational\src\AbstractFactory\contracts\LanguageInterface;
use app\modules\creational\src\AbstractFactory\contracts\CountryNameInterface;
use app\modules\creational\src\AbstractFactory\contracts\CountryAbstractFactoryInterface;

final readonly class JapanFactory implements CountryAbstractFactoryInterface
{
    public function createCapital(): CapitalInterface
    {
        return new Tokyo();
    }

    public function createCurrency(): CurrencyInterface
    {
        return new JapaneseYen();
    }

    public function createLanguage(): LanguageInterface
    {
        return new Japanese();
    }

    public function createCountryName(): CountryNameInterface
    {
        return new Japan();
    }
}
