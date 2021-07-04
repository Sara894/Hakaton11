<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->title;
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'title',
        'description:html',
        'img:image',
        'date_action',
    ],
]) ?>