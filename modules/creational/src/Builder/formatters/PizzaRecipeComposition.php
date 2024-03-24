<?php

namespace app\modules\creational\src\Builder\formatters;

use Stringable;
use app\modules\creational\src\Builder\aggregates\Pizza;
use app\modules\creational\src\Builder\views\PizzaReportTemplate;
use app\modules\creational\src\Builder\contracts\ValuationInterface;

final readonly class PizzaRecipeComposition implements Stringable
{
    private Stringable $template;

    public function __construct(
        private Pizza $pizza,
    )
    {
        $this->template = new PizzaReportTemplate(
            pizza: $this->pizza,
            valuePostfix: 'гр.',
            valueCallback: fn (ValuationInterface $valuation) => $valuation->getWeight($this->pizza->formFactorRate),
        );
    }

    public function __toString()
    {
        return $this->template;
    }
}
