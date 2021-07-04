<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= Url::toRoute(['site/index'])?>"><img src="/backend/web/public/images/logo.png" width="200" height="70" alt=""></a>
            </div>




            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a  href="<?= Url::toRoute(['site/index'])?>">На главную</a>
                    </li>
                    <li><a  href="<?= Url::toRoute(['article/index'])?>">Статьи</a> </li>
                    <li><a  href="<?= Url::toRoute(['count/index'])?>">Посетители</a> </li>
                    <li><a  href="<?= Url::toRoute(['tag/index'])?>">Теги</a> </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Войти</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Зарегестрироваться</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Выйти (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
<?=$content?>
<!--main content start-->
<!-- end main content-->
<!--footer start-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/backend/web/public/images/logo.png" alt=""></div>
                    <div class="about-content">Пилотный проект Хакатона Оренбуржья
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">Контактная информация</h4>

                        <p> проспект Победы, 13</p>

                        <p> Телефон: 89534569344</p>

                        <p>archiveOren.ru</p>
                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Отзывы</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Старейший театр города — Оренбургский областной драматический театр имени М. Горького. Впервые спектакли в городском театре Оренбурга начали идти в 1869 году, до этого в городе выступали лишь заезжие труппы. На сцене театра в разные годы выступали Полина Стрепетова, Вера Комиссаржевская, Михаил Тарханов. В 1898 году, одновременно с МХТ, на сцене театра была поставлена чеховская «Чайка».</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/backend/web/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Это интересно!</h4>

                                            <h4>Об Оренбурге</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Оренбургский муниципальный театр кукол «Пьеро» — самый молодой театр Оренбурга. Основан в 1991 году. Каждые два года театр проводит международный театральный фестиваль «Оренбургский арбузник».</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/backend/web/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Это интересно!</h4>

                                            <h4>Об Оренбурге</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>В городе действует 30 библиотек, в том числе:

                                            Оренбургская областная универсальная научная библиотека имени Н. К. Крупской (ООУНБ им. Н.К.Крупской)
                                            Библиотека имени А.П.Чехова</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/backend/web/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Это интересно!</h4>

                                            <h4>Об Оренбурге</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Просто надо видеть</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="/backend/web/uploads/6158711cb0657876531dd16e2ff1fdf2.jpg" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Поселок Луна, Оренбуржье</a>
                            <span class="p-date">Лето 2021</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2015 <a href="#">Treasure PRO, </a> Built with <i
                                class="fa fa-heart"></i> by <a href="#">Rahim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
