<?php

namespace app\modules\creational\src\AbstractFactory\contracts;

interface LanguageFactoryInterface
{
    public function create(): LanguageInterface;
}
