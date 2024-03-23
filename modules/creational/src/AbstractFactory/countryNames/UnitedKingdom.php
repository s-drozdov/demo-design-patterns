<?php

namespace app\modules\creational\src\AbstractFactory\countryNames;

use app\modules\creational\src\AbstractFactory\contracts\CountryNameInterface;

final readonly class UnitedKingdom implements CountryNameInterface
{
    public function getNameInLocativeCase(): string
    {
        return 'Соединенном королевстве';
    }
}
