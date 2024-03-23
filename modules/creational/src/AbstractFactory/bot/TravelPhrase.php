<?php

namespace app\modules\creational\src\AbstractFactory\bot;

use Stringable;
use app\modules\creational\src\AbstractFactory\contracts\CountryAbstractFactoryInterface;

final readonly class TravelPhrase implements Stringable
{
    public function __construct(
        private CountryAbstractFactoryInterface $factory,
    )
    {}

    public function __toString()
    {
        $countryName = $this->factory->createCountryName();
        $capital = $this->factory->createCapital();
        $currency = $this->factory->createCurrency();
        $language = $this->factory->createLanguage();

        return 'В '
            . $countryName->getNameInLocativeCase()
            . ' Вам обязательно понядобятся '
            . $currency->getCurrency()
            . '. И когда '
            . $capital->getName()
            . ' распахнет свои объятия, непременно посетите '
            . $capital->getLandmark()
            . '. И будьте уверены, что каждый, кто встретится на пути, с радостью промолвит "'
            . $language->getGreeting()
            . '". Ведь это самое счастливое место на земле!';
    }
}
