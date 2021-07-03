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
                                <h6><a href="#"> <?=$article->category->title;?></a></h6>

                                <h1 class="entry-title"><a href="blog.html"><?=$article->title?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?=$article->description?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="view" class="more-link">Продолжить чтение</a>
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
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Популярные статьи</h3>
                        <? foreach ($popular as $post):?>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="<?=$post->getImage()?>" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase"><?=$post->title?></a>
                                <span class="p-date"><?=$post->date?></span>

                            </div>
                        </div>
                        <? endforeach;?>
                    </aside>


                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Самые новые статьи</h3>

                        <?foreach ($recent as $new):?>
                        <div class="thumb-latest-posts">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="<?=$new->getImage()?>" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase"><?=$new->title?></a>
                                    <span class="p-date"><?=$new->date?></span>
                                </div>
                            </div>
                        </div>
                        <?endforeach;?>
                    </aside>



                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Категории статей архива4</h3>
                        <ul>
                            <? foreach ($categories as $category):?>
                            <li>
                                <a href="#"><?=$category->title?></a>
                                <span class="post-count pull-right">(<?=$category->getArticles()->count();?>)</span>
                            </li>
                            <? endforeach;?>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>