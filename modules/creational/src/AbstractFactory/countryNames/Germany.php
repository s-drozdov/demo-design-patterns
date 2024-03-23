<?php

namespace app\modules\creational\src\AbstractFactory\countryNames;

use app\modules\creational\src\AbstractFactory\contracts\CountryNameInterface;

final readonly class Germany implements CountryNameInterface
{
    public function getNameInLocativeCase(): string
    {
        return 'Германии';
    }
}
