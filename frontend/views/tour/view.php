<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Tour;
use common\models\Type;
use common\models\Address;
/* @var $this yii\web\View */
/* @var $model common\models\Tour */
// var_dump($providerAddressHotels);
// exit();
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];

?>
<div class="tour-view">
    <style type="text/css" media="screen">
        @media screen and (max-width: 960px) {
            .container_12,
            .container_16 {
                width: auto
            }
        }
        .featured .carousel-inner .small-thumbnail,
        .featured .carousel-inner .no-thumbnail,
        .featured .carousel-inner .item {
            height: 300px;
        }
        .featured-blog .carousel-inner .item {
            height: 300px;
        }
        #site-title {
            font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
        }
        #site-description {
            font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            $(".carousel").carousel({
                interval: 8000
            })
        });
    </script>
    
    <style type="text/css">
        #site-title a,
        #site-description {
            color: #057fa5 !important;
        }
    </style>
<body class="single single-tour postid-382 single-author singular">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-11660279-10', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="main">
        <div id="breadcrumbs" class="container_12 clearfix">
            <span >
                <span typeof="v:Breadcrumb">
                    <a href="../../index.html" rel="v:url" property="v:title">Home</a> » 
                    <span rel="v:child" typeof="v:Breadcrumb">
                        <a href="../../travel-style/sightseeing/index.html" rel="v:url" property="v:title"><?= Tour::getTypesName($model); ?></a> » 
                            <span class="breadcrumb_last"><?= $model->name ?></span>
                    </span>
                </span>
            </span>
        </div>
        <div class="container_12 clearfix">
            <div id="content" class="grid_8 " role="main">

                <article id="post-382" class="post-382 tour type-tour has-post-thumbnail duration-day-tour travel-style-sightseeing destination-hue">
                    <header class="entry-header">
                        <h1 class="entry-title"><?= $model->name; ?></h1>
                        <div class="entry-meta">
                            <span class='price'>from 
                                <span><?= $model->price ?>$</span>
                            </span>
                            <i class='fa fa-clock-o'></i>
                            <a href='../../duration/day-tour/index.html'>Day tour</a> &nbsp;&nbsp;
                            <i class='fa fa-map-marker'></i>
                            <a href='../../destination/hue/index.html'><?= Tour::getAddressesName($model); ?></a>
                        </div>
                    </header>
                    <div class="entry-content clearfix">

                        <div class='thumbox clearfix'>
                            <?php  
                                foreach ($model->images as $image) {    
                            ?>
                                <img src="/api/uploads/<?= $image->name; ?>" class="thumb"  />
                            <?php } ?>
                        </div>
                        <p class='desc'><?= $model->info ?></p>
                        <div id="message"></div>

                        <div class="tabs">
                            <ul class="tab-links">
                                <li class="active"><a href="#itinerary">Itinerary</a>
                                </li>
                                <li><a href="#price">Price</a>
                                </li>
                                <li><a href="#inquiry">Enquiry</a>
                                </li>
                            </ul>
                                <?= $this->render('_details',['model'=>$model]);?>
                                <?= $this->render('_itinerary',[
                                        'model'=>$model,
                                        'providerAddressHotels' => $providerAddressHotels, 
                                        'providerTourPrices' => $providerTourPrices,
                                        'providerTourHotels' => $providerTourHotels,
                                 ]); ?>
                                
                                <?= $this->render('_enquiry');?>
                                
                    </div>
                    <div class='yarpp-related'>
                        <h3>See also:</h3>
                        <div class="yarpp-thumbnails-horizontal">
                            <a class='yarpp-thumbnail' href='../da-nang-hue-2-days/index.html' title='Da Nang &#8211; Hue 2 days'>
                                <img width="120" height="80" src="../../wp-content/uploads/hue-imperial-citadel.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="imperial city hue" srcset="http://tourindanang.com/wp-content/uploads/hue-imperial-citadel.jpg 640w, http://tourindanang.com/wp-content/uploads/hue-imperial-citadel-500x334.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">Da Nang &#8211; Hue 2 days</span>
                            </a>
                            <a class='yarpp-thumbnail' href='../danang-hoian-hue-tour-4-days/index.html' title='Da Nang &#8211; Hoi An &#8211; Hue 4 Days'>
                                <img width="120" height="90" src="../../wp-content/uploads/da-nang-beach.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="da nang beach" srcset="http://tourindanang.com/wp-content/uploads/da-nang-beach.jpg 650w, http://tourindanang.com/wp-content/uploads/da-nang-beach-500x375.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">Da Nang &#8211; Hoi An &#8211; Hue 4 Days</span>
                            </a>
                            <a class='yarpp-thumbnail' href='../../guide/the-imperial-citadel-hue/index.html' title='The Imperial Citadel of Hue City'>
                                <img width="120" height="66" src="../../wp-content/uploads/imperial-citadel.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="imperial citadel hue" srcset="http://tourindanang.com/wp-content/uploads/imperial-citadel.jpg 754w, http://tourindanang.com/wp-content/uploads/imperial-citadel-500x275.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">The Imperial Citadel of Hue City</span>
                            </a>
                            <a class='yarpp-thumbnail' href='../boat-trip-on-perfume-river-hue/index.html' title='Boat trip on Perfume River Hue'>
                                <img width="120" height="85" src="../../wp-content/uploads/perfume-river-boat-trip.jpg" class="attachment-yarpp-thumbnail size-yarpp-thumbnail wp-post-image" alt="perfume river boat trip" srcset="http://tourindanang.com/wp-content/uploads/perfume-river-boat-trip.jpg 570w, http://tourindanang.com/wp-content/uploads/perfume-river-boat-trip-500x356.jpg 500w" sizes="(max-width: 120px) 100vw, 120px" /><span class="yarpp-thumbnail-title">Boat trip on Perfume River Hue</span>
                            </a>
                        </div>
                    </div>
                </article>

            </div>
   

