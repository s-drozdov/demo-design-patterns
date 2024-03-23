<?php

namespace app\modules\creational\src\AbstractFactory\capitals;

use app\modules\creational\src\AbstractFactory\contracts\CapitalInterface;

final readonly class Berlin implements CapitalInterface
{
    public function getName(): string
    {
        return 'Берлин';
    }

    public function getLandmark(): string
    {
        return 'Бранденбургские ворота';
    }
}
