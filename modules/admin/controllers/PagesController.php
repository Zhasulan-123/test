<?php

namespace app\modules\admin\controllers;

use Yii;

class PagesController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}