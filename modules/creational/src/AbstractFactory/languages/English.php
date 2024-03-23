<?php

namespace app\modules\creational\src\AbstractFactory\languages;

use app\modules\creational\src\AbstractFactory\contracts\LanguageInterface;

final readonly class English implements LanguageInterface
{
    public function getGreeting(): string
    {
        return 'Good day, Sir. It\'s a pleasure to meet you!';
    }
}
