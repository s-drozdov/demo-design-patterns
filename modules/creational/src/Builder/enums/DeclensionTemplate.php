<?php

namespace app\modules\creational\src\Builder\enums;

enum DeclensionTemplate: string
{
    case Nominative = '@NOMINATIVE_CASE@';
    case Genitive = '@GENITIVE_CASE@';
}
