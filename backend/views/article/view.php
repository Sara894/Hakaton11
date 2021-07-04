<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить статью', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Прикрепить изображение', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default btn-lg']) ?>
        <?= Html::a('Указать категорию', ['set-category', 'id' => $model->id], ['class' => 'btn btn-default btn-lg']) ?>
        <?= Html::a('Указать теги', ['set-tags', 'id' => $model->id], ['class' => 'btn btn-default btn-lg']) ?>
        <?= Html::a('Удалить статью', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'content:ntext',
            'date',
            'image',
            'viewed',
            'user_id',
            'status',
            [
                'format'=>'html',
                'label'=>'Category ID',
                'value'=> $model->category->title

            ],

        ],
    ]) ?>

</div>
