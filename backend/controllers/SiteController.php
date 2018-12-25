<?php
namespace backend\controllers;

use backend\components\BaseController;
use Yii;

/**
 * Class SiteController
 * @package backend\controllers
 */
class SiteController extends BaseController
{
    public function actionIndex()
    {
        echo Yii::$app->request->getPathInfo();
        echo "</br>";
        echo "ddd";die;
    }

}