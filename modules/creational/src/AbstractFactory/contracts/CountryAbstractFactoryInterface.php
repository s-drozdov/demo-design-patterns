<?php

namespace app\modules\creational\src\AbstractFactory\contracts;

interface CountryAbstractFactoryInterface
{
    public function createCapital(): CapitalInterface;

    public function createCurrency(): CurrencyInterface;

    public function createLanguage(): LanguageInterface;

    public function createCountryName(): CountryNameInterface;
}
