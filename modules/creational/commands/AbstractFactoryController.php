<?php

namespace app\modules\creational\commands;

use yii\console\ExitCode;
use yii\console\Controller;
use app\modules\creational\src\AbstractFactory\bot\TravelPhrase;
use app\modules\creational\src\AbstractFactory\factories\JapanFactory;
use app\modules\creational\src\AbstractFactory\factories\GermanyFactory;
use app\modules\creational\src\AbstractFactory\factories\UnitedKingdomFactory;
use app\modules\creational\src\AbstractFactory\contracts\CountryAbstractFactoryInterface;

class AbstractFactoryController extends Controller
{
    public function actionIndex(): int
    {
        echo 'Путешествуйте легко. Открывайте горизонты с нашим туристическим ботом:' . PHP_EOL;

        /** @var CountryAbstractFactoryInterface $factory */
        foreach ([
                     new UnitedKingdomFactory(),
                     new GermanyFactory(),
                     new JapanFactory(),
                 ] as $factory) {
            echo (new TravelPhrase($factory)) . PHP_EOL;
        }

        return ExitCode::OK;
    }
}
