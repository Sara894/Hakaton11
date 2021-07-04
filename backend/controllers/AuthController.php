<?php


namespace backend\controllers;

use Yii;
use common\models\LoginForm;
use yii\web\Controller;
use backend\models\User;

class AuthController extends Controller
{
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'blank';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionTest()
    {
        $user = User::findOne(2);
     //   var_dump($user);die;
        Yii::$app->user->logout();
       if ( Yii::$app->user->isGuest)
       {
           echo "пользователь гость";
       }
       else
       {
           echo "Пользователь авторизован";
       }
    }


    public function actionSignup()
    {

    }

}