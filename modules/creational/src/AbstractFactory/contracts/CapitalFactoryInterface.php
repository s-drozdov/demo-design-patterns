<?php

namespace app\modules\creational\src\AbstractFactory\contracts;

interface CapitalFactoryInterface
{
    public function create(): CapitalInterface;
}
