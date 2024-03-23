<?php

namespace app\modules\creational\src\AbstractFactory\languages;

use app\modules\creational\src\AbstractFactory\contracts\LanguageInterface;

final readonly class Japanese implements LanguageInterface
{
    public function getGreeting(): string
    {
        return 'こんにちは';
    }
}
