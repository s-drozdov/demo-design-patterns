<?php

namespace app\modules\creational\src\Builder\ingredients;

use app\modules\creational\src\Builder\enums\DeclensionTemplate;
use app\modules\creational\src\Builder\contracts\IngredientInterface;

final readonly class Sausages implements IngredientInterface
{
    private const SINGULAR_FORM = 'россыпь итальянских сосисок';

    public function __toString()
    {
        return 'Итальянские сосиски';
    }

    public function getPriceInUsdPerKilo(): int
    {
        return 8;
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => self::SINGULAR_FORM,
            DeclensionTemplate::Genitive->value => self::SINGULAR_FORM,
        ];
    }
}
