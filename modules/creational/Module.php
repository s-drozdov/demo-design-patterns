<?php

namespace app\modules\creational;

use Yii;

/**
 * creational module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        if (Yii::$app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'app\modules\creational\commands';
        }
    }
}
