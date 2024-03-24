<?php


namespace app\modules\creational\src\Builder\traits;

use app\modules\creational\src\Builder\helpers\StringHelper;
use app\modules\creational\src\Builder\enums\DeclensionTemplate;

trait Inbowable
{
    private const DEFAULT_TITLE_NOMINATIVE = 'секретный ингредиент';
    private const DEFAULT_TITLE_GENITIVE = 'секретного ингредиента';

    public function getTitle(): ?string
    {
        return null;
    }

    public function __toString()
    {
        return (new StringHelper($this->getTitle() ?? self::DEFAULT_TITLE_NOMINATIVE))
            ->ucFirstAdditionalCodepages();
    }

    public function getDeclensionConfig(): array
    {
        return [
            DeclensionTemplate::Nominative->value => $this->getTitle() ?? self::DEFAULT_TITLE_NOMINATIVE,
            DeclensionTemplate::Genitive->value => $this->getTitle() ?? self::DEFAULT_TITLE_GENITIVE,
        ];
    }
}