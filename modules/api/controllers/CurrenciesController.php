<?php

namespace app\modules\api\controllers;

use Yii;
use yii\rest\ActiveController;
use app\modules\api\models\Currency;

class CurrenciesController extends ActiveController
{
    public $modelClass = 'app\modules\api\models\Currency';

    public function actions()
    {

        $actions = parent::actions();

        unset($actions['delete'], $actions['create'], $actions['update']);

        return $actions;
    }

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'data',
    ];
}
