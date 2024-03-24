<?php

namespace app\modules\creational\src\Builder\contracts;

use Stringable;

interface DoughBasementInterface extends Stringable, ValuationInterface
{
    public function getDescriptionPhrase(): string;
}
