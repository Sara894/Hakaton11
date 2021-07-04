<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use yii\helpers\Url;

$this->title = 'Вход';
?>

<div class="leave-comment mr0"><!--leave comment-->
    <div class="row">
        <img src="/backend/web/public/images/logo.png" alt="">
        <div class="col-md-8 col-md-offset-2">
            <div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста, заполните поля, чтобы войти как пользователь:</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
                <h4>   <a href="<?= Url::toRoute(['auth/signup'])?>">Зарегестрироваться</a></h4>


            <?php ActiveForm::end(); ?>
</div>
</div>
</div>
</div>
