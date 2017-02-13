<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Type;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
    <header id="masthead" class="site-header clearfix">
            <div class="screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a>
            </div>
            <div id="branding" class="container_12 clearfix">
                <div class="grid_12 clearfix">
                    <div id="site-title"><a href="/" title="tour in Danang" rel="home">tour in Danang</a>
                        <span id="site-description">your insider companion</span>
                    </div>
                    <div class="quickcontact"><a href="tel:+84 129 377 3333"><i class="fa fa-phone fa-2x"></i></a><span class="hidden-phone">+84 129-377-3333</span> <a href="mailto:igo@tourindanang.com"><i class="fa fa-envelope-o fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div id="mainmenu" class="navbar clearfix">
                <div class="container_12">
                    <div class="navbar-inner">
                        <nav id="section-menu" class="section-menu">
                            <a class="brand" rel="nofollow" href="/">
                                <img src="/api/uploads/hvg-travel.png" width="98" height="38" alt="tour in Danang" /> </a>
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                            <div class="nav-collapse">
                                <form method="get" id="searchform" action="http://tourindanang.com/" class="navbar-search pull-right ">
                                    <input type="text" class="search-query" name="s" id="s1" placeholder="Search">
                                    <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
                                </form>
                                <div class="section-menu-container">
                                    <ul id="menu-top-menu" class="nav">
                                        <li id="nav-menu-item-138" class="main-menu-item  menu-item-depth-0 parent dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="../index.html" class="menu-link">Tours</a><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                                            <ul class="dropdown-menu menu-depth-1">
                                                <?php 
                                                    $typesName = Type::listType();
                                                    foreach ($typesName as $typeName) {
                                                    
                                                ?>
                                                    <li id="nav-menu-item-345" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style current-tour-ancestor current-menu-parent current-tour-parent"><a href="../../travel-style/sightseeing/index.html" class="menu-link"><?= $typeName; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li id="nav-menu-item-220" class="main-menu-item  menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-duration current-tour-ancestor current-menu-parent current-tour-parent"><a href="/day/" class="menu-link">Day trips</a>
                                        </li>
                                        <li id="nav-menu-item-99" class="main-menu-item  menu-item-depth-0 parent dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="../../guide/index.html" class="menu-link">Things to do</a><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                                            <ul class="dropdown-menu menu-depth-1">
                                                <li id="nav-menu-item-223" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="../../things-to-do/attractions/index.html" class="menu-link">Attractions</a>
                                                </li>
                                                <li id="nav-menu-item-224" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="../../things-to-do/eat-and-drink/index.html" class="menu-link">Eat and Drink</a>
                                                </li>
                                                <li id="nav-menu-item-225" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="../../things-to-do/shopping/index.html" class="menu-link">Shopping</a>
                                                </li>
                                                <li id="nav-menu-item-226" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="../../things-to-do/show-and-event/index.html" class="menu-link">Show and Event</a>
                                                </li>
                                                <li id="nav-menu-item-227" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="../../things-to-do/travel-tips/index.html" class="menu-link">Travel tips</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="nav-menu-item-222" class="main-menu-item  menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="../../about-us/index.html" class="menu-link">About us</a>
                                        </li>
                                        <li id="nav-menu-item-79" class="main-menu-item  menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="../../contact-us/index.html" class="menu-link">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    <?= $content ?>
    <!--<div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        
    </div>-->
<footer class="footer">
    <div class="container">
        <!--<p class="pull-left">&copy; My Company <?= date('Y') ?></p>-->
        <!--<p class="pull-right"><?= Yii::powered() ?></p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</div>
</body>
</html>
<?php $this->endPage() ?>
