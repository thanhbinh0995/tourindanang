<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tour;
use common\models\Type;
use yii\data\ActiveDataProvider;
use yii\widgets\Menu;
use common\widgets\ListWidget;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tours';
?>

<body class="archive tax-destination term-da-nang term-33 single-author multi">
	<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-11660279-10', 'auto');
    ga('send', 'pageview');

    </script>
    <div id="main">
        <div id="breadcrumbs" class="container_12 clearfix">
            <span
                xmlns:v="http://rdf.data-vocabulary.org/#">
                <span typeof="v:Breadcrumb">
                    <a href="../../index.html" rel="v:url" property="v:title">Home</a> » 
                    <span rel="v:child" typeof="v:Breadcrumb">
                        <a href="../../tour/index.html" rel="v:url" property="v:title">Tours</a> » 
                        <span class="breadcrumb_last">Da Nang</span>
                    </span>
                </span>
            </span>
        </div>
        <div class="container_12 clearfix">
            <div id="content" class="grid_8 " role="main">
                <header class="page-header">
                    <h1 class="page-title">Vietnam: 
                        <span>Da Nang</span>
                    </h1>
                </header>

                <?=   ListWidget::widget(['provider' => $provider]); ?>
               

            </div>
	</body>