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

            <div id="sidebar_one" class="grid_4 widget-area blog-widgets" role="complementary">
                <ul class="xoxo">
                    <li id="nav_menu-2" class="widget-container widget_nav_menu">
                        <h4 class="widget-title">Da Nang Tour</h4>
                        <div class="menu-da-nang-tour-container">
                            <?php 
                                foreach ($typesName as $typeName) {
                                    echo Menu::widget([
                                        'items' => [
                                            ['label' => $typeName['name'], 'url' => ['type/index']],
                                        ],
                                    ]);
                                }							
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="sidebar_two" class="grid_4 widget-area blog-widgets pull-right" role="complementary">
                <ul class="xoxo">
                    <li id="tag_cloud-2" class="widget-container widget_tag_cloud">
                        <h4 class="widget-title">Destinations</h4>
                        <div class="tagcloud">
                            <?php 
                                foreach ($addressesName as $addressName) {
                                    echo Menu::widget([
                                        'items' => [
                                            ['label' => $addressName['name'], 'url' => ['address/index']],
                                        ],
                                    ]);
                                }
                            ?>
                        </div>
                    </li>
                    <li id="tag_cloud-4" class="widget-container widget_tag_cloud">
                        <h4 class="widget-title">Plan for days?</h4>
                        <div class="tagcloud"><a href='../duration/day-tour/index' class='tag-link-37 tag-link-position-1' title='24 topics' style='font-size: 22pt;'>Day tour</a>
                            <?php 
                                foreach ($days as $day) {
                            ?>
                                <a href='' class='tag-link-38 tag-link-position-7' title='1 topic' style='font-size: 8pt;'><?= $day['dayTour']; ?>
                            <?php 
                                if ($day['dayTour'] > 1) echo " days";
                                    else echo " day";
                            ?>
                            </a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
    <div id="footer" role="contentinfo">
        <div class="container_12 clearfix">

            <div id="footer-widget-area" class="visible-desktop clearfix" role="complementary">
            </div>
            <div id="footer-menu" class="grid_12" role="complementary">
                <div class="footer-menu">
                    <ul id="menu-footer" class="menu">
                        <li id="menu-item-280" class="menu-item menu-item-type-taxonomy menu-item-object-duration menu-item-280"><a href="../duration/day-tour/index">Day tour</a>
                        </li>
                        <li id="menu-item-282" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-282"><a href="index">Package tours</a>
                        </li>
                        <li id="menu-item-281" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-281"><a href="../guide/index">Things to do</a>
                        </li>
                        <li id="menu-item-284" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-284"><a href="../destination/da-nang/index">Da Nang tours</a>
                        </li>
                        <li id="menu-item-658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a href="http://tourinhanoi.com/">Hanoi tours</a>
                        </li>
                        <li id="menu-item-657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-657"><a href="../contact-us/index">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="social-links bottom medium-icon">
                    <ul>
                        <li><a class="url_facebook" href="http://www.facebook.com/AproTravel" title="Facebook" target="_blank">Facebook</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="site-info" class="grid_6">
                &copy; 2017<a href="/site" title="tour in Danang" rel="home">
        tour in Danang</a>
            </div>
        </div>
        <div class="back-to-top"><a href="#masthead"><span class="icon-chevron-up"></span> TOP</a>
        </div>
    </div>
    <script type='text/javascript' src='../wp-content/themes/tourindanang/js/bootstrap.min254d.js?ver=2.3.1'></script>
    <script type='text/javascript' src='../wp-content/themes/tourindanang/js/jquery.colorbox-min877b.js?ver=1.3.30'></script>
    <script type='text/javascript' src='../wp-content/themes/tourindanang/js/prettify.js'></script>
    <script type='text/javascript' src='../wp-content/themes/tourindanang/js/voyageedfb.js?ver=1.3.8'></script>
    <script type='text/javascript' src='http://tourindanang.com/wp-includes/js/wp-embed.min.js?ver=4.6.1'></script>
</body>