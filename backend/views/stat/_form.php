<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Statistica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statistica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'str_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_ip')->textInput() ?>

    <?= $form->field($model, 'black_list_ip')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>