<?php

namespace app\modules\creational\src\Builder\formatters;

use Stringable;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\views\PizzaReportTemplate;
use app\modules\creational\src\Builder\contracts\ValuationInterface;

final readonly class PizzaReport implements Stringable
{
    private Stringable $template;

    public function __construct(
        private Pizza $pizza,
    )
    {
        $this->template = new PizzaReportTemplate(
            pizza: $this->pizza,
            valuePostfix: ';',
            valueCallback: fn (ValuationInterface $valuation) => $valuation->getPrice($this->pizza->formFactorRate),
            valuePrefix: '$',
        );
    }

    public function __toString()
    {
        return $this->template;
    }
}
