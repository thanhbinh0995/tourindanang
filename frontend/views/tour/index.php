<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tour;
use common\models\Type;
use yii\data\ActiveDataProvider;
use yii\widgets\Menu;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tours';
?>
<body class="archive post-type-archive post-type-archive-tour single-author multi">
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
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-11660279-10', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="main">
        <div class="featured-wrapper clearfix">
            <div class="container_12 clearfix">
                <div id="content" class="grid_12" role="main">
                    <article id="post-0" class="landing">
                        <div id="landing-text" class="one_half alpha">
                            <h1>My Son sanctuary tour</h1>
                            <p>Half day tour to UNESCO World Heritage site of My Son sanctuary, discover ancient Champa religion and cultures</p>
                            <p class="action-full">
                                <a class="btn btn-primary btn-large" href="tour/my-son-sanctuary-halfday-tour/index.html">See details</a>
                            </p>
                        </div>
                        <div id="landing-media" class="one_half omega">
                            <p>
                                <img src="wp-content/uploads/my-son-sanctuary-2_0.jpg" alt="My Son tour from Da nang" />
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <!-- #container -->
        </div>
        <div class="container_12 clearfix">
            <div id="content" class="grid_8 " role="main">
                <div class="page-header">
                    <h1 class="page-title">Sightseeing tours Da Nang</h1>
                </div>
                    
                    <?php 
                        foreach ($dataProvider as $tour) {
                    ?>
                <article id="post-792" class="post-792 tour type-tour has-post-thumbnail duration-day-tour travel-style-active-tours travel-style-sightseeing destination-da-nang">
                    <figure class="thumbt">
                        <a href="tour/<?php echo $tour->slug; ?>" title="<?php $tour->name ?>"><img width="150" height="150" src="/api/uploads/<?php echo $tour->avatar ?>" class="img-polaroid featured-image wp-post-image" alt="img" title="<?php $tour->name ?>" />
                        </a>
                    </figure>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="tour/<?= $tour->slug ?>" title="<?= $tour->name ?>" rel="bookmark"><?= $tour->name ?></a></h2> </header>
                    <div class="entry-content clearfix">
                        <span class='price'>from <span>$33</span></span>
                        <i class='fa fa-clock-o'></i> 
                        <a href='../duration/day-tour/index'>
                            <?php echo $tour->dayTour; 
                                if ($tour->dayTour > 1) echo " days";
                                else echo " day";
                            ?>
                        </a> &nbsp;&nbsp;<i class='fa fa-map-marker'></i> <a href='/address'>
                            <?= Tour::getAddressesName($tour); ?>
                        </a>
                        <p><?php $tour?></p>
                    </div>
                </article>
                <?php } ?>
            </div>
</body>