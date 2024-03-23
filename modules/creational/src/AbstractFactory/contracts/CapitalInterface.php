<?php

namespace app\modules\creational\src\AbstractFactory\contracts;

interface CapitalInterface
{
    public function getName(): string;

    public function getLandmark(): string;
}
