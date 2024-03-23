<?php

namespace app\modules\creational\src\AbstractFactory\factories;

use app\modules\creational\src\AbstractFactory\capitals\London;
use app\modules\creational\src\AbstractFactory\languages\English;
use app\modules\creational\src\AbstractFactory\currencies\BritishPound;
use app\modules\creational\src\AbstractFactory\contracts\CapitalInterface;
use app\modules\creational\src\AbstractFactory\countryNames\UnitedKingdom;
use app\modules\creational\src\AbstractFactory\contracts\CurrencyInterface;
use app\modules\creational\src\AbstractFactory\contracts\LanguageInterface;
use app\modules\creational\src\AbstractFactory\contracts\CountryNameInterface;
use app\modules\creational\src\AbstractFactory\contracts\CountryAbstractFactoryInterface;

final readonly class UnitedKingdomFactory implements CountryAbstractFactoryInterface
{
    public function createCapital(): CapitalInterface
    {
        return new London();
    }

    public function createCurrency(): CurrencyInterface
    {
        return new BritishPound();
    }

    public function createLanguage(): LanguageInterface
    {
        return new English();
    }

    public function createCountryName(): CountryNameInterface
    {
        return new UnitedKingdom();
    }
}
