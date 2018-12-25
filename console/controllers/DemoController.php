<?php
namespace console\controllers;

use console\components\BaseController;
use Yii;

/**
 * Class DemoController
 * @package console\controllers
 */
class DemoController extends BaseController
{
    public function actionIndex()
    {
        Yii::error("asdf");
        1/0;
        echo "aaabbb";die;
    }
}