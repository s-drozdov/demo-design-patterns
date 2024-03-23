<?php

namespace app\modules\creational\src\AbstractFactory\capitals;

use app\modules\creational\src\AbstractFactory\contracts\CapitalInterface;

final readonly class Tokyo implements CapitalInterface
{
    public function getName(): string
    {
        return 'Токио';
    }

    public function getLandmark(): string
    {
        return 'Сад Хаппоен';
    }
}
