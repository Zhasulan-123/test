<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Response;
use yii\httpclient\Client;
use app\modules\admin\models\Currencies;

class CurrenciesController extends AppController
{
    public function actionIndex()
    {
        $select = Currencies::find()->asArray()->all();
        return $this->render('index', ['select' => $select]);
    }

    public function actionUpdatePast($id)
    {
        $currency_update_id =  Currencies::findOne($id);
        if (Yii::$app->request->isAjax) {
            return $this->renderAjax('_form', ['model' => $currency_update_id]);
        }
    }

    public function actionUpdate($id)
    {
        $currency_update =  Currencies::findOne($id);
        if (Yii::$app->request->isAjax && $currency_update->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $currency_update->updated_at = date('Y-m-d H:i:s');
            if ($currency_update->save()) {
                $update_up = Currencies::find()->asArray()->all();
                $html = $this->renderPartial('jsUpdate', ['select' => $update_up], true);
                return ['success' => true, 'html' => $html];
            } else {
                return ['success' => false];
            }
        }
    }

    public function actionDelete()
    {
        if (Yii::$app->request->isAjax) {
            $currency = Currencies::findOne(Yii::$app->request->post('id'));
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($currency->delete()) {
                $update_delete = Currencies::find()->asArray()->all();
                $html = $this->renderPartial('jsUpdate', ['select' => $update_delete], true);
                return ['delete' => true, 'html' => $html];
            } else {
                return ['delete' => false];
            }
        }
    }

    public function actionCreate()
    {

        $client = new Client();
        $response = $client->createRequest()
            ->setFormat(Client::FORMAT_XML)
            ->setMethod('GET')
            ->setUrl('https://nationalbank.kz/rss/rates_all.xml?switch=russian')
            ->setData(['name' => 'title'])
            ->send();

        foreach ($response->data['channel']['item'] as $item) {
            $model = new Currencies();
            $model->name = $item['title'];
            $model->rate = $item['description'];
            $model->date = $item['pubDate'];
            $model->created_at = date('Y-m-d H:i:s');
            $model->save();
        }
    }
}
