<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Count */

$this->title = 'Create Count';
$this->params['breadcrumbs'][] = ['label' => 'Counts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="count-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
