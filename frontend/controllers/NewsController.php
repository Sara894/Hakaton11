<?php

namespace frontend\controllers;

use common\models\News;
use common\models\Settings;
use yii\data\ActiveDataProvider;
use Yii;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->where(['<=', 'date_action', date('Y-m-d H:i:s')]),
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ],
            'totalCount' => 3,
            'pagination' => [
                'pageSize' => Settings::getNumPage()
            ]
        ]);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionDetail($id){

        $news = News::findOne($id);
        return $this->render('detail', ['model' => $news]);

    }

    public function actionSend(){
        $result = Yii::$app->mailer->compose()
            ->setFrom('v.sevryukov123@thecoders.ru')
            ->setTo('v.sevryukov@thecoders.ru')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
        var_dump($result);
    }

}
