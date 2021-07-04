<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

    <div class="col mb-4">
        <div class="card h-100">
            <img src="/backend/web/uploads/<?= HtmlPurifier::process($model->img) ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= HtmlPurifier::process($model->title) ?></h5>
                <p class="card-text"><?= HtmlPurifier::process($model->description) ?></p>
                <a href="detail?id=<?= HtmlPurifier::process($model->id) ?>">Детальная</a>
            </div>
        </div>
    </div>
