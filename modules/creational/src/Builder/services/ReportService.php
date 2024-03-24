<?php

namespace app\modules\creational\src\Builder\services;

use Stringable;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\formatters\PizzaReport;
use app\modules\creational\src\Builder\vocabulary\PizzaTasteLexicon;
use app\modules\creational\src\Builder\formatters\PizzaTasteDescription;
use app\modules\creational\src\Builder\formatters\PizzaRecipeComposition;

final readonly class ReportService implements Stringable
{
    public function __construct(
        private Pizza $pizza,
    )
    {}

    public function __toString()
    {
        $result = (string) new PizzaTasteDescription(
            pizza: $this->pizza,
            vocabulary: (new PizzaTasteLexicon())->getVocabulary(),
        );
        $result .= PHP_EOL . PHP_EOL . 'Записывайте рецепт от шеф-повара, пока не поздно:' . PHP_EOL;
        $result .= new PizzaRecipeComposition(pizza: $this->pizza) . PHP_EOL;
        $result .= PHP_EOL . 'Отчет по себестоимости:' . PHP_EOL;
        $result .= new PizzaReport(pizza: $this->pizza) . PHP_EOL;
        return $result;
    }
}
