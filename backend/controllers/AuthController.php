<?php


namespace backend\controllers;

use backend\models\User;
use Yii;
use yii\base\Controller;
use common\models\LoginForm;


class AuthController extends Controller
{

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main';

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
        if (Yii::$app->user->isGuest) {
            echo "пользователь гость";
        } else {
            echo "Пользователь авторизован";
        }
    }


    public function actionSignup()
    {
        $model = new \backend\models\SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}