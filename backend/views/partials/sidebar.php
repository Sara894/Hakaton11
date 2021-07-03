<?
use yii\helpers\Url;
?>
<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Популярные статьи</h3>
            <? foreach ($popular as $post):?>
                <div class="popular-post">


                    <a href="<?= Url::toRoute(['site/view', 'id'=>$post->id])?>" class="popular-img"><img src="<?=$post->getImage()?>" alt="">

                        <div class="p-overlay"></div>
                    </a>

                    <div class="p-content">
                        <a href="<?= Url::toRoute(['site/view', 'id'=>$post->id])?>" class="text-uppercase"><?=$post->title?></a>
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
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$new->id])?>" class="popular-img"><img src="<?=$new->getImage()?>" alt="">
                                <div class="p-overlay"></div>
                            </a>
                        </div>
                        <div class="p-content">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$new->id])?>" class="text-uppercase"><?=$new->title?></a>
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
                        <a href="<?= Url::toRoute(['site/view', 'id'=>$category->id])?>"><?=$category->title?></a>
                        <span class="post-count pull-right">(<?=$category->getArticles()->count();?>)</span>
                    </li>
                <? endforeach;?>

            </ul>
        </aside>
    </div>
</div>