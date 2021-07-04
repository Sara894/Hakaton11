<?php


namespace backend\controllers;

use Yii;
use common\models\LoginForm;
use yii\web\Controller;
use backend\models\User;
use backend\models\SignupForm;

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
        $model = new User();

        if (Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            $pass_hash = (Yii::$app->getSecurity()->generatePasswordHash($model->password_hash));
            $model->password_hash =$pass_hash;
           // var_dump( $model->password_hash);die;

            if(  $model->load(Yii::$app->request->post()));
            {
                $model->save(false);
                return $this->redirect(['auth/login']);
            }

        }

        return $this->render('signup',['model'=>$model]);
    }

}