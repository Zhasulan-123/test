<?php

namespace app\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;

class CurrenciesController extends ActiveController
{
    public $modelClass = 'app\modules\api\models\Currency';

    public function actions()
    {

        $actions = parent::actions();

        unset($actions['delete'], $actions['create'], $actions['update']);

        return $actions;
    }
}
