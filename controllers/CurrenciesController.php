<?php

namespace app\controllers;

use Yii;
use app\models\LoginForm;
use app\modules\admin\models\Currencies;

class CurrenciesController extends AppController
{
    public function actionIndex()
    {
        $select = Currencies::find()->asArray()->all();

        return $this->render('index', ['select' => $select]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
