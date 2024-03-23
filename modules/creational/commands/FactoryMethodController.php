<?php

namespace app\modules\creational\commands;

use yii\console\ExitCode;
use yii\console\Controller;
use app\modules\creational\src\FactoryMethod\contracts\DishInterface;
use app\modules\creational\src\FactoryMethod\factories\RollFactory;
use app\modules\creational\src\FactoryMethod\factories\UdonFactory;
use app\modules\creational\src\FactoryMethod\factories\YakiToriFactory;

class FactoryMethodController extends Controller
{
    public function actionIndex(): int
    {
        echo 'Пробуем на вкус свежесозданные блюда японской кухни:' . PHP_EOL;

        /** @var DishInterface $dish */
        foreach ([
                     (new RollFactory())->create(),
                     (new UdonFactory())->create(),
                     (new YakiToriFactory())->create(),
                 ] as $dish) {
            echo $dish->getTasteResult() . PHP_EOL;
        }

        return ExitCode::OK;
    }
}
