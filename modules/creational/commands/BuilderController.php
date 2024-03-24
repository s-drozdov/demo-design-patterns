<?php

namespace app\modules\creational\commands;

use yii\console\ExitCode;
use yii\console\Controller;
use app\modules\creational\src\Builder\enums\FormFactorRate;
use app\modules\creational\src\Builder\builders\PizzaBuilder;
use app\modules\creational\src\Builder\services\ReportService;
use app\modules\creational\src\Builder\repositories\RecipeRepository;
use app\modules\creational\src\Builder\contracts\PizzaDirectorInterface;

class BuilderController extends Controller
{
    private array $recipes;

    public function init()
    {
        parent::init();
        $this->recipes = (new RecipeRepository())->getAll();
    }

    public function actionIndex(): int
    {
        echo PHP_EOL . '!!!ПИЦЦА ДНЯ!!!' . PHP_EOL;
        $this->getRandom();
        return ExitCode::OK;
    }

    public function actionGetAll(): int
    {
        foreach ($this->recipes as $recipe) {
            /** @var PizzaDirectorInterface $director */
            $director = new $recipe(builder: new PizzaBuilder(), formFactorRate: FormFactorRate::Medium);
            $this->getReport($director);
        }

        return ExitCode::OK;
    }

    private function getReport(PizzaDirectorInterface $director): void
    {
        $brandNewPizza = $director->build();
        echo new ReportService($brandNewPizza);
    }

    private function getRandom(): void
    {
        shuffle($this->recipes);
        $formFactorRates = FormFactorRate::cases();
        shuffle($formFactorRates);

        /** @var PizzaDirectorInterface $director */
        $director = new (current($this->recipes))(
            builder: new PizzaBuilder(),
            formFactorRate: current($formFactorRates),
        );
        $this->getReport($director);
    }
}
