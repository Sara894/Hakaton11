<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Счетчик посетителей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="count-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Count', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
<div>
    <h2>За все время архив посетили: <?=$usersCount?> раза</h2>
    <h2>За все время архив посетили уникальных пользователей: <?=$usersUniqueCount?></h2>

</div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ip',
            'str_url:url',
            'date_ip',
            'black_list_ip',
            //'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
