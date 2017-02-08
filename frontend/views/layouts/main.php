<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- This site is optimized with the Yoast SEO plugin v4.0 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Travel agent in Da Nang offering exclusive tours and package traveling in Vietnam. Choose our Da Nang tour or customize it your way."/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="index.php" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Tour in Da Nang, Vietnam - Da Nang Tours by local" />
<meta property="og:description" content="Travel agent in Da Nang offering exclusive tours and package traveling in Vietnam. Choose our Da Nang tour or customize it your way." />
<meta property="og:url" content="index.php" />
<meta property="og:site_name" content="tour in Danang" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/tourindanang.com\/","name":"tourinDanang","alternateName":"HVG Travel","potentialAction":{"@type":"SearchAction","target":"http:\/\/tourindanang.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","url":"http:\/\/tourindanang.com\/","sameAs":[],"@id":"#organization","name":"HVG Travel","logo":"http:\/\/tourindanang.com\//wp-content\/uploads\/hvg-logo-hr1.png"}</script>
<!-- / Yoast SEO plugin. -->

<link rel='stylesheet' id='yarppWidgetCss-css'  href='/wp-content/plugins/yet-another-related-posts-plugin/style/widget1c9b.css?ver=4.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='/wp-content/themes/tourindanang/css/bootstrap.min254d.css?ver=2.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='/wp-content/themes/tourindanang/css/font-awesome.minb2f9.css?ver=4.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='voyage-css'  href='/wp-content/themes/tourindanang/dev/voyage-styleedfb.css?ver=1.3.8' type='text/css' media='all' />
<link rel='stylesheet' id='voyage-responsive-css'  href='/wp-content/themes/tourindanang/css/responsive.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='voyage-scheme-css'  href='/wp-content/themes/tourindanang/scheme/lightblueedfb.css?ver=1.3.8' type='text/css' media='all' />
<script type='text/javascript' src='http://tourindanang.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://tourindanang.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' async src='/wp-content/themes/tourindanang/js/modernizr.voyage.js'></script>
<!-- Voyage CSS Style (Theme Options) -->
<style type="text/css" media="screen">
@media screen and (max-width: 960px ){.container_12, .container_16 { width: auto } }
.featured .carousel-inner .small-thumbnail,
.featured .carousel-inner .no-thumbnail,
.featured .carousel-inner .item {height:
300px;}
.featured-blog .carousel-inner .item { height: 300px; }
#site-title {font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;}
#site-description {font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;}
</style>
<script>jQuery(document).ready(function($){$(".carousel").carousel({interval:8000})});</script>
<style type="text/css">
#site-title a,
#site-description {
	color: #057fa5 !important;
}
</style>
<link rel="icon" href="/wp-content/uploads/inDanang_wbg-150x150.png" sizes="32x32" />
<link rel="icon" href="/wp-content/uploads/inDanang_wbg.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="/wp-content/uploads/inDanang_wbg.png" />
<meta name="msapplication-TileImage" content="http://tourindanang.com//wp-content/uploads/inDanang_wbg.png" />
<link rel="shortcut icon" href="/wp-content/themes/tourindanang/favicon.ico" />
 <link rel="stylesheet" href="/css/test.css">
</head>
<body>

	
 

    
      
        <?= $content ?>
    





</body>
</html>
<?php $this->endPage() ?>
