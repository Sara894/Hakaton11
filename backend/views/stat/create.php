<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Statistica */

$this->title = 'Create Statistica';
$this->params['breadcrumbs'][] = ['label' => 'Statisticas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statistica-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>