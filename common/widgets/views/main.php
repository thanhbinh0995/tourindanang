<?php 

use yii\helpers\Html;
use yii\widgets\Menu;
?>

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
                                <form method="get" id="searchform" action="" class="navbar-search pull-right ">
                                    <input type="text" class="search-query" name="s" id="s1" placeholder="Search">
                                    <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
                                </form>
                                <div class="section-menu-container">
                                    <ul id="menu-top-menu" class="nav">
                                        <li id="nav-menu-item-138" class="main-menu-item  menu-item-depth-0 parent dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="../../tour" class="menu-link">Tours</a><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
                                            <ul class="dropdown-menu menu-depth-1">
                                               
                                                <?php 
                                                    foreach ($typesName as $typeName) {
                                                ?>
                                                    <li id="nav-menu-item-345" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style current-tour-ancestor current-menu-parent current-tour-parent"><a href="../../type/view?typeId=<?= $typeName['id']; ?>" class="menu-link"><?= $typeName['name']; ?></a>
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

            <div id="sidebar_one" class="grid_4 widget-area blog-widgets" role="complementary">
                <ul class="xoxo">
                    <li id="nav_menu-2" class="widget-container widget_nav_menu">
                        <h4 class="widget-title">Da Nang Tour</h4>
                        <div class="menu-da-nang-tour-container">
                            <?php 

                                foreach ($typesName as $typeName) {

                                    echo Menu::widget([
                                        'items' => [
                                            ['label' => $typeName['name'], 'url' => ['/type/view?typeId='.$typeName['id'].'']],
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
                                $d=0;
                                foreach ($addressesName as $addressName) {
                            ?>
                            <a href='/address/view?id=<?= $addressName["id"] ?>' class='tag-link-33 tag-link-position-1' title='21 topics' style='font-size: <?= 22-$d; ?>pt;'><?= $addressName['name']; ?></a>
                            <?php 
                                $d+=5;
                            } 
                            ?>
                        </div>
                    </li>
                    <li id="tag_cloud-4" class="widget-container widget_tag_cloud">
                        <h4 class="widget-title">Plan for days?</h4>
                        <div class="tagcloud">
                            <?php 
                                $i=0;
                                foreach ($days as $day) {
                            ?>
                                <a href='/day-tour/view?dayTour=<?= $day["dayTour"]?>' class='tag-link-37 tag-link-position-1' title='1 topic' style='font-size: <?= 22-$i?>pt;'>
                                    <?php 
                                        if ($day['dayTour'] > 1) echo $day['dayTour'] . " days";
                                        else echo "Day Tour";
                                        $i+=5;
                                    ?>
                                </a>
                            
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
