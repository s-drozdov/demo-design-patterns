<?php

namespace app\modules\creational\src\AbstractFactory\languages;

use app\modules\creational\src\AbstractFactory\contracts\LanguageInterface;

final readonly class German implements LanguageInterface
{
    public function getGreeting(): string
    {
        return 'Guten Tag Herr. Sie sind herzlich willkommen!';
    }
}
