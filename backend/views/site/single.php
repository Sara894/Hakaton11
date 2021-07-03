<!--main content start-->
<?use yii\helpers\Url;?>
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?=$article->getImage()?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="#"><?=$article->category->title?></a></h6>

                            <h1 class="entry-title"><a href="blog.html"><?=$article->title?></a></h1>


                        </header>
                        <div class="entry-content">
                            <p><?= $article->content?>
                            </p>
                        </div>
                        <div class="decoration">
                            <a href="#" class="btn btn-default">Вверх</a>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">Статья Оренбуржского Читального Зала от <?= $article->date?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
                <div class="top-comment"><!--top comment-->
                    <img src="/backend/web/public/images/comment.jpg" class="pull-left img-circle" alt="">
                    <h4>Оренбуржский Читальный Зал</h4>

                    <p>Пилотный проект хакатона </p>
                </div><!--top comment end-->
                <div class="row"><!--blog next previous-->
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$previousArticle->id])?>">
                                <img src="<?=$previousArticle->getImage()?>" alt="">

                                <div class="overlay">

                                    <div class="promo-text">
                                        <p><i class=" pull-left fa fa-angle-left"></i></p>
                                        <h5><?=$previousArticle->title?> </h5>
                                    </div>
                                </div>


                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$nextArticle->id])?>">
                                <img src="<?=$nextArticle->getImage()?>" alt="">

                                <div class="overlay">
                                    <div class="promo-text">
                                        <p><i class=" pull-right fa fa-angle-right"></i></p>
                                        <h5> <?=$nextArticle->title?></h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--blog next previous end-->
                <div class="related-post-carousel"><!--related post carousel-->
                    <div class="related-heading">
                        <h4>Вам может быть интересно</h4>
                    </div>  <div class="items">
                    <?foreach ($data as $onePost):?>
                        <div class="single-item">
                            <a href="<?= Url::toRoute(['site/view', 'id'=>$onePost->id])?>">
                                <img src="<?=$onePost->getImage()?>" alt="">

                                <p><?=$onePost->title?></p>
                            </a>
                        </div>
                    <?endforeach;?>
                    </div>
                </div><!--related post carousel-->
                <div class="bottom-comment"><!--bottom comment-->
                    <h4>3 comments</h4>

                    <div class="comment-img">
                        <img class="img-circle" src="/backend/web/public/images/comment-img.jpg" alt="">
                    </div>

                    <div class="comment-text">
                        <a href="#" class="replay btn pull-right"> Ответить</a>
                        <h5>Иван Иванов</h5>

                        <p class="comment-date">
                            Декабрь, 02, 2022 в 5:57 утра
                        </p>


                        <p class="para">Норм</p>
                    </div>
                </div>
                <!-- end bottom comment-->


                <div class="leave-comment"><!--leave comment-->
                    <h4>Хотите оставить отзыв?</h4>


                    <form class="form-horizontal contact-form" role="form" method="post" action="#">
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Email">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
										<textarea class="form-control" rows="6" name="message"
                                                  placeholder="Write Massage"></textarea>
                            </div>
                        </div>
                        <a href="#" class="btn send-btn">Отзыв на статью</a>
                    </form>
                </div><!--end leave comment-->
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Популярные статьи</h3>
                        <div class="popular-post">
                            <? foreach ($popular as $pop):?>
                            <a href="#" class="popular-img"><img src="<?=$pop->getImage()?>" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase"><?=$pop->title?></a>
                                <span class="p-date"><?=$pop->date?></span>
                            </div>
                            <? endforeach;?>
                        </div>
                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Категории</h3>
                        <ul>
                            <?foreach ($categories as $category):?>
                            <li>
                                <a href="#"><?= $category->title?></a>
                                <span class="post-count pull-right"> (<?=$category->getArticles()->count()?>)</span>
                            </li>
                            <?endforeach;?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
