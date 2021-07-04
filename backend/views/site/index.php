<?php
// display pagination
use yii\widgets\LinkPager;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Главная страница';
?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($articles as $article):?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>"><img src="<?=$article->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="#"> <?=$article->category->title?></a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>"><?=$article->title?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?=$article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id'=>$article->id])?>" class="more-link">Продолжить чтение</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize"><a href="#"></a><?=$article->date?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?=$article->viewed?>
                                </ul>
                            </div>
                        </div>
                    </article>
                <?php endforeach;?>

               <?php
               echo LinkPager::widget([
                   'pagination' => $pages,
               ]);?>
            </div>
            <?=$this->render('/partials/sidebar',[  'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories])?>
        </div>
    </div>
</div>