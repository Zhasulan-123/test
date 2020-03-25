<?php

namespace app\modules\api\controllers;

use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class RestController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
