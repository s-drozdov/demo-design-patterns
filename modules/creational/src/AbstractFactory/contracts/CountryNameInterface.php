<?php

namespace app\modules\creational\src\AbstractFactory\contracts;

interface CountryNameInterface
{
    public function getNameInLocativeCase(): string;
}
