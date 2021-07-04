<?php

use yii\bootstrap4\Carousel;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use common\models\News;
use common\models\Gallery;

/* @var $this yii\web\View */
\yii\web\YiiAsset::register($this);
$this->title = "Главная";
?>
    <div class="mb-3">
        <?php
            echo Carousel::widget([
                'items' => Gallery::getImageGallery(),
            ]);
        ?>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <a href="#" class="text-reset">Новости</a>
        <div class="row row-cols-1 row-cols-md-3 mt-3">
            <?
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options' => ['tag' => null],
                    'itemView' => '_post',
                    'summary' => '',
                ]);
            ?>
        </div>
    </div>
