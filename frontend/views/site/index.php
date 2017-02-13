<?php
use common\models\Tour;
use yii\data\ActiveDataProvider;
use yii\widgets\Menu;

function checkTourAvailable($tourTemp){
	if( $tourTemp != NULL && $tourTemp->prices != NULL && Tour::getAddressesName($tourTemp) != null && Tour::getTypesName($tourTemp) != null)
		 return true;
	else return false;
}
?>
<body class="home blog single-author multi">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11660279-10', 'auto');
  ga('send', 'pageview');

</script>
<div id="wrapper">
	<header id="masthead" class="site-header clearfix">
	<div class="screen-reader-text"><a href="#content" title="Skip to content">Skip to content</a></div><div id="branding" class="container_12 clearfix">
  <div class="grid_12 clearfix">

		<div id="site-title"><a href="/site" title="tour in Danang" rel="home">tour in Danang</a>
		  <span id="site-description">your insider companion</span></div>
<div class="quickcontact"><a href="tel:+84 129 377 3333"><i class="fa fa-phone fa-2x"></i></a><span class="hidden-phone">+84 129-377-3333</span> <a href="mailto:igo@tourindanang.com"><i class="fa fa-envelope-o fa-2x"></i></a>
		</div>
  </div>
</div>
<div id="mainmenu" class="navbar clearfix">
  <div class="container_12">
  	<div class="navbar-inner">
	  <nav id="section-menu" class="section-menu">	
          	<a class="brand" rel="nofollow" href="/site">
				<img src="/wp-content/uploads/hvg-travel.png" width="98" height="38" alt="tour in Danang" />			</a>
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
		<div class="nav-collapse">
    <form method="get" id="searchform" action="http://tourindanang.com/" class="navbar-search pull-right ">
    	<input type="text" class="search-query" name="s" id="s1" placeholder="Search">
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
    </form>
<div class="section-menu-container"><ul id="menu-top-menu" class="nav"><li id="nav-menu-item-138" class="main-menu-item  menu-item-depth-0 parent dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="/tour/index" class="menu-link">Tours</a><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
<ul class="dropdown-menu menu-depth-1">
	<li id="nav-menu-item-345" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style"><a href="travel-style/sightseeing/index" class="menu-link">Sightseeing</a></li>
	<li id="nav-menu-item-341" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style"><a href="travel-style/active-tours/index" class="menu-link">Active tours</a></li>
	<li id="nav-menu-item-343" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style"><a href="travel-style/foodie-tours/index" class="menu-link">Foodie tours</a></li>
	<li id="nav-menu-item-344" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style"><a href="travel-style/golfing/index" class="menu-link">Golfing</a></li>
	<li id="nav-menu-item-375" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-travel-style"><a href="travel-style/beach-break/index" class="menu-link">Beach break</a></li>
</ul>
</li>
<li id="nav-menu-item-220" class="main-menu-item  menu-item-depth-0 menu-item menu-item-type-taxonomy menu-item-object-duration"><a href="duration/day-tour/index" class="menu-link">Day trips</a></li>
<li id="nav-menu-item-99" class="main-menu-item  menu-item-depth-0 parent dropdown menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="guide/index" class="menu-link">Things to do</a><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b class="caret"></b></a>
<ul class="dropdown-menu menu-depth-1">
	<li id="nav-menu-item-223" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="things-to-do/attractions/index" class="menu-link">Attractions</a></li>
	<li id="nav-menu-item-224" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="things-to-do/eat-and-drink/index" class="menu-link">Eat and Drink</a></li>
	<li id="nav-menu-item-225" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="things-to-do/shopping/index" class="menu-link">Shopping</a></li>
	<li id="nav-menu-item-226" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="things-to-do/show-and-event/index" class="menu-link">Show and Event</a></li>
	<li id="nav-menu-item-227" class="sub-menu-item  menu-item-depth-1 menu-item menu-item-type-taxonomy menu-item-object-things-to-do"><a href="things-to-do/travel-tips/index" class="menu-link">Travel tips</a></li>
</ul>
</li>
<li id="nav-menu-item-222" class="main-menu-item  menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="about-us/index" class="menu-link">About us</a></li>
<li id="nav-menu-item-79" class="main-menu-item  menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="contact-us/index" class="menu-link">Contact us</a></li>
</ul></div>		</div>	</nav>
    </div>  </div></div>	</header>
<div id="main">
	<div class="featured-wrapper clearfix"><div class="container_12 clearfix"><div id="content" class="grid_12" role="main">	
	<?php 
		$count = 0;
		foreach($tours as $tour){
			if(checkTourAvailable($tour)){ 
			$idFeature = $tour->id;
			?>
				<article id="<?php echo $tour->id ?>" class="landing">
<div id="landing-text" class="one_half alpha"><h1><?php echo $tour->name ?></h1><p><?php echo $tour->info ?></p><p class="action-full"><a class="btn btn-primary btn-large" href="tour/view/<?= $tour->id ?>">See details</a></p></div><div id="landing-media" class="one_half omega"><p><img src="/api/uploads/<?php echo $tour->avatar ?>" alt="<?php echo $tour->name ?>" /></p></div>		</article>
		<?php	break; } 
			$count++;
		}
		if($count == count($tours)) { ?>
			<article class="landing">
<div id="landing-text" class="one_half alpha"></div><p>Tour not found</p><div id="landing-media" class="one_half omega"></div>		</article>
		<?php }
	?>
	
</div>
</div><!-- #container -->
</div><!-- featured wrapper -->
<div class="container_12 clearfix">

<div id="home-widget-area" class="clearfix">
</div>
<div id="content" class="grid_8 " role="main">
	<?php
		foreach($tours as $tour){
			if( checkTourAvailable($tour) ){
				if($tour->id == $idFeature) continue;
		?>
			<article id="<?php echo $tour->id ?>" class="<?php echo $tour->id ?> tour type-tour has-post-thumbnail ">
		<figure class="thumbt"><a href="tour/view/<?= $tour->id ?>" title=" echo <?php $tour->name ?>"><img width="150" height="150" src="/api/uploads/<?php echo $tour->avatar ?>" class="img-polaroid featured-image wp-post-image" alt="minh mang tomb" title="<?php echo $tour->name ?>" /></a></figure>	<header class="entry-header">
		<h2 class="entry-title"><a href="tour/view/<?= $tour->id ?>" title="<?php echo $tour->name ?>" rel="bookmark"><?php echo $tour->name ?></a></h2>	</header>
		
		<div class="entry-content clearfix">

		<span class='price'>from <span><?php echo $tourPrice[$tour->name] ?></span> </span><i class='fa fa-clock-o'></i> <a href='duration/day-tour/index'>Day tour</a> &nbsp;&nbsp;<i class='fa fa-map-marker'></i> 

		<?php 
		for($countAddress = 0; $countAddress < count($tourAddress[$tour->name]) ; $countAddress++) {
		?>
			<a href='destination/hue/index'><?php echo $tourAddress[$tour->name][$countAddress];?></a>, 
		<?php }?>
		 	
		 <p><?php echo $tour->info ?></p>	</div>
	</article>
	<?php	
			}
		}
	?>
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
                                    <a href='' class='tag-link-38 tag-link-position-7' title='1 topic' style='font-size: 8pt;'><?= $day['dayTour']; ?></a>
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
		<div class="footer-menu"><ul id="menu-footer" class="menu"><li id="menu-item-280" class="menu-item menu-item-type-taxonomy menu-item-object-duration menu-item-280"><a href="duration/day-tour/index">Day tour</a></li>
<li id="menu-item-282" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-282"><a href="tour/index">Package tours</a></li>
<li id="menu-item-281" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-281"><a href="guide/index">Things to do</a></li>
<li id="menu-item-284" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-284"><a href="destination/da-nang/index">Da Nang tours</a></li>
<li id="menu-item-658" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-658"><a href="http://tourinhanoi.com/">Hanoi tours</a></li>
<li id="menu-item-657" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-657"><a href="contact-us/index">Contact us</a></li>
</ul></div>	
		<div class="social-links bottom medium-icon"><ul><li><a class="url_facebook" href="http://www.facebook.com/AproTravel" title="Facebook" target="_blank">Facebook</a></li></ul></div>			
		</div>

		<div id="site-info" class="grid_6">
		&copy; 2017<a href="/site" title="tour in Danang" rel="home">
			tour in Danang</a>
		</div><!-- #site-info -->
	</div><!-- #footer-container -->		
	<div class="back-to-top"><a href="#masthead"><span class="icon-chevron-up"></span> TOP</a></div>
</div><!-- #footer -->
</div><!-- #wrapper -->
<script type='text/javascript' src='/wp-content/themes/tourindanang/js/bootstrap.min254d.js?ver=2.3.1'></script>
<script type='text/javascript' src='/wp-content/themes/tourindanang/js/jquery.colorbox-min877b.js?ver=1.3.30'></script>
<script type='text/javascript' src='/wp-content/themes/tourindanang/js/prettify.js'></script>
<script type='text/javascript' src='/wp-content/themes/tourindanang/js/voyageedfb.js?ver=1.3.8'></script>
<script type='text/javascript' src='http://tourindanang.com/wp-includes/js/wp-embed.min.js?ver=4.6.1'></script>
</body>

<!-- Mirrored from tourindanang.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Jan 2017 09:18:13 GMT -->
</html>
