<?php

namespace app\modules\creational\src\Builder\views;

use Closure;
use Stringable;
use app\modules\creational\src\Builder\aggregates\Pizza;

/**
 * @property Closure(ValuationInterface):(float) $valueCallback
 */
final readonly class PizzaReportTemplate implements Stringable
{
    private const DELIMITER = '==============================';
    private const PAD_LENGTH = 30;

    public function __construct(
        private Pizza $pizza,
        private string $valuePostfix,
        private Closure $valueCallback,
        private string $valuePrefix = '',
    )
    {}

    public function __toString()
    {
        $basementWeight = ($this->valueCallback)($this->pizza->basement);
        $result = 'Пицца ' . mb_strtoupper($this->pizza->recipeName) . PHP_EOL
            . 'ФОРМ-ФАКТОР: ' . "\t" . $this->pizza->formFactorRate->name . PHP_EOL
            . self::DELIMITER . PHP_EOL
            . $this->pizza->basement . ' основа: '
            . "\t" . $this->valuePrefix . $basementWeight . $this->valuePostfix . PHP_EOL;

        $total = $basementWeight;

        foreach ($this->pizza->ingredients as $ingredient) {
            $weight = ($this->valueCallback)($ingredient);
            $result .= str_pad($ingredient->type . ': ', self::PAD_LENGTH)
                . $this->valuePrefix . $weight . $this->valuePostfix . PHP_EOL;
            $total += $weight;
        }

        $result .= self::DELIMITER . PHP_EOL
            . str_pad('ИТОГО: ', self::PAD_LENGTH)
            . $this->valuePrefix . $total . $this->valuePostfix . PHP_EOL;

        return $result;
    }
}
