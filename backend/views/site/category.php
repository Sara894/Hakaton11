<!--main content start-->
<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?foreach ($articles as $article):?>
                <article class="post post-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="post-thumb">
                                <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id])?>"><img src="<?=$article->getImage()?>" alt="" class="pull-left"></a>

                                <a href="<?=Url::toRoute(['site/view', 'id'=>$article->id])?>" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">Читать статью</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-content">
                                <header class="entry-header text-uppercase">
                                    <h6><a href="#"><?=$article->category->title?></a></h6>

                                    <h1 class="entry-title"><a href="<?=Url::toRoute(['site/view', 'id'=>$article->id])?>"><?=$article->title?></a></h1>
                                </header>
                                <div class="entry-content">
                                    <p><?=$article->description?>
                                    </p>
                                </div>
                                <div class="social-share">
                                    <span class="social-share-title pull-left text-capitalize"><?=$article->date?></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <? endforeach;?>
                <ul class="pagination">
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);?>
                </ul>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="/backend/web/public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                        <div class="popular-post">

                            <a href="#" class="popular-img"><img src="/backend/web/public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="/backend/web/public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/backend/web/public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/backend/web/public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/backend/web/public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="/backend/web/public/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Food & Drinks</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Travel</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Business</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Story</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">DIY & Tips</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="#">Lifestyle</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Follow@Instagram</h3>

                        <div class="instragram-follow" >
                            <a href="#">
                                <img src="/backend/web/public/images/ins-1.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-2.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-3.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-4.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-5.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-6.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-7.jpg" width="100" height="111" alt="">
                            </a>
                            <a href="#">
                                <img src="/backend/web/public/images/ins-8.jpg" width="100" height="111" alt="">
                            </a>


                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>