<?php

namespace app\modules\creational\src\AbstractFactory\capitals;

use app\modules\creational\src\AbstractFactory\contracts\CapitalInterface;

final readonly class London implements CapitalInterface
{
    public function getName(): string
    {
        return 'Лондон';
    }

    public function getLandmark(): string
    {
        return 'Лондонский Тауер';
    }
}
