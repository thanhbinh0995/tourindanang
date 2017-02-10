
<!--<head>
<meta charset="UTF-8" />
<title>Tour in Da Nang, Vietnam - Da Nang Tours by local</title>

</head>-->
<?php

use yii\db\QueryBuilder;
use yii\db\Query ;
use common\models\Tour;
use common\models\Price;
use common\models\TourAddress;
use common\models\Address;
/* @var $this yii\web\View */
/* @var $model common\models\Hotel */
/* @var $form yii\widgets\ActiveForm */
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
		$tours = Tour::find()->limit(2)->orderBy('id DESC')->one();
		$idFeature = $tours->id;
	?>
	<article id="<?php echo $tours->id ?>" class="landing">
<div id="landing-text" class="one_half alpha"><h1><?php echo $tours->name ?></h1><p><?php echo $tours->info ?></p><p class="action-full"><a class="btn btn-primary btn-large" href="tour/my-son-sanctuary-halfday-tour/index">See details</a></p></div><div id="landing-media" class="one_half omega"><p><img src="/api/uploads/<?php echo $tours->avatar ?>" alt="<?php echo $tours->name ?>" /></p></div>		</article>
</div>
</div><!-- #container -->
</div><!-- featured wrapper -->
<div class="container_12 clearfix">

<div id="home-widget-area" class="clearfix">
</div>
<div id="content" class="grid_8 " role="main">
	<?php
		
		// $query = new Query;
		// $query->select(['tour.id','name','dayTour','tour.info','itinerary','avatar','price.info'])->from(['tour','price'])->limit(4)->orderBy(['tour.id'=>SORT_DESC])->where(['tour.id' => 'price.tourId']);
		// $command = $query->createCommand();
		$tours = Tour::find()->limit(4)->orderBy('id DESC')->all(); 
		foreach($tours as $tour){
			if($tour->id == $idFeature) continue;
			$price = Price::find()->where(['tourId'=>$tour->id])->orderBy('info ASC')->one();
			$addresses = TourAddress::find()->where(['tourId'=>$tour->id])->select('addressId')->all();
			$addressId = array();
			$count = 0;
			foreach($addresses as $address){
            	array_push($addressId, $address->addressId);
       		}
			// var_dump($addressId);
			// exit();
			$addressAll = Address::listAddress();
			$addressId = Tour::getAddressesName($addressId,$addressAll);
			$addressId = explode('<br/>',$addressId);
			// var_dump($addressId);
			//  exit();
			
		?>
			<article id="<?php echo $tour->id ?>" class="<?php echo $tour->id ?> tour type-tour has-post-thumbnail ">
		<figure class="thumbt"><a href="tour/hue-city-tour/index" title=" echo <?php $tour->name ?>"><img width="150" height="150" src="/api/uploads/<?php echo $tour->avatar ?>" class="img-polaroid featured-image wp-post-image" alt="minh mang tomb" title="<?php echo $tour->name ?>" /></a></figure>	<header class="entry-header">
		<h2 class="entry-title"><a href="tour/hue-city-tour/index" title="<?php echo $tour->name ?>" rel="bookmark"><?php echo $tour->name ?></a></h2>	</header>
		
		<div class="entry-content clearfix">
		
		<?php 
		// 	$query = new Query;
		// $query->select('address.name')->from('tour-address','address')->where(['tour-address.tourId => $count','tour-address.addressId => address.id']);
		// $command = $query->createCommand();
		// $price = $command->queryAll();
		for($countAddress = 0; $countAddress < count($addressId) ; $countAddress++) {
		?>
			<a href='destination/hue/index'><?php echo $addressId[$countAddress];?></a>, 
		<?php }?>
		 	
		 <p><?php echo $tour->info ?></p>	</div>
	</article>
	<?php	}

	?>
	<!--<article id="post-382" class="post-382 tour type-tour has-post-thumbnail duration-day-tour travel-style-sightseeing destination-hue">
		<figure class="thumbt"><a href="tour/hue-city-tour/index" title="Imperial Hue City Tour"><img width="150" height="150" src="/wp-content/uploads/minh-mang-tomb-1-150x150.jpg" class="img-polaroid featured-image wp-post-image" alt="minh mang tomb" title="Imperial Hue City Tour" /></a></figure>	<header class="entry-header">
		<h2 class="entry-title"><a href="tour/hue-city-tour/index" title="Imperial Hue City Tour" rel="bookmark">Imperial Hue City Tour</a></h2>	</header>
		
		<div class="entry-content clearfix">
		<span class='price'>from <span>$40</span> </span><i class='fa fa-clock-o'></i> <a href='duration/day-tour/index'>Day tour</a> &nbsp;&nbsp;<i class='fa fa-map-marker'></i>  <a href='destination/hue/index'>Hue</a>, 	<p>In comparison with other ancient capitals in South East Asia, Hue is the one that still preserves comparatively the intact appearance of a complex of the monarchic capital consisting of walls,..</p>	</div>
	</article>-->
</div>
	
		<div id="sidebar_one" class="grid_4 widget-area blog-widgets" role="complementary">
		<ul class="xoxo">		
<li id="nav_menu-2" class="widget-container widget_nav_menu"><h4 class="widget-title">Da Nang Tour</h4><div class="menu-da-nang-tour-container"><ul id="menu-da-nang-tour" class="menu"><li id="menu-item-261" class="menu-item menu-item-type-taxonomy menu-item-object-travel-style menu-item-261"><a href="travel-style/sightseeing/index">Sightseeing</a></li>
<li id="menu-item-263" class="menu-item menu-item-type-taxonomy menu-item-object-travel-style menu-item-263"><a href="travel-style/foodie-tours/index">Foodie tours</a></li>
<li id="menu-item-352" class="menu-item menu-item-type-taxonomy menu-item-object-travel-style menu-item-352"><a href="travel-style/active-tours/index">Active tours</a></li>
<li id="menu-item-393" class="menu-item menu-item-type-taxonomy menu-item-object-travel-style menu-item-393"><a href="travel-style/golfing/index">Golfing</a></li>
<li id="menu-item-374" class="menu-item menu-item-type-taxonomy menu-item-object-travel-style menu-item-374"><a href="travel-style/beach-break/index">Beach break</a></li>
</ul></div></li>		</ul>
		</div>
		<div id="sidebar_two" class="grid_4 widget-area blog-widgets pull-right" role="complementary">
			<ul class="xoxo">
				<li id="tag_cloud-2" class="widget-container widget_tag_cloud"><h4 class="widget-title">Destinations</h4><div class="tagcloud"><a href='destination/da-nang/index' class='tag-link-33 tag-link-position-1' title='21 topics' style='font-size: 22pt;'>Da Nang</a>
<a href='destination/hoi-an/index' class='tag-link-35 tag-link-position-2' title='13 topics' style='font-size: 19.442307692308pt;'>Hoi An</a>
<a href='destination/hue/index' class='tag-link-32 tag-link-position-3' title='12 topics' style='font-size: 18.903846153846pt;'>Hue</a>
<a href='destination/quang-binh/index' class='tag-link-36 tag-link-position-4' title='3 topics' style='font-size: 12.038461538462pt;'>Quang Binh</a>
<a href='destination/quang-tri/index' class='tag-link-53 tag-link-position-5' title='1 topic' style='font-size: 8pt;'>Quang Tri</a></div>
</li><li id="tag_cloud-4" class="widget-container widget_tag_cloud"><h4 class="widget-title">Plan for days?</h4><div class="tagcloud"><a href='duration/day-tour/index' class='tag-link-37 tag-link-position-1' title='24 topics' style='font-size: 22pt;'>Day tour</a>
<a href='duration/4-days/index' class='tag-link-40 tag-link-position-2' title='3 topics' style='font-size: 11.818181818182pt;'>4 days</a>
<a href='duration/3-days/index' class='tag-link-39 tag-link-position-3' title='2 topics' style='font-size: 10.290909090909pt;'>3 days</a>
<a href='duration/7-days/index' class='tag-link-48 tag-link-position-4' title='2 topics' style='font-size: 10.290909090909pt;'>7 days</a>
<a href='duration/6-days/index' class='tag-link-52 tag-link-position-5' title='1 topic' style='font-size: 8pt;'>6 days</a>
<a href='duration/5-days/index' class='tag-link-41 tag-link-position-6' title='1 topic' style='font-size: 8pt;'>5 days</a>
<a href='duration/2-days/index' class='tag-link-38 tag-link-position-7' title='1 topic' style='font-size: 8pt;'>2 days</a></div>
</li><li id="nav_menu-4" class="widget-container widget_nav_menu"><h4 class="widget-title">Travel with us</h4><div class="menu-see-also-container"><ul id="menu-see-also" class="menu"><li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a href="daily-group-tours/index">Daily Group Tours (Seat in Coach Tours)</a></li>
<li id="menu-item-402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-402"><a href="ticket-booking/index">Ticket booking</a></li>
<li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-403"><a href="car-rental-da-nang/index">Car rental Da Nang</a></li>
<li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-404"><a href="hotel-room-booking/index">Book hotel rooms in Da Nang</a></li>
</ul></div></li>			</ul>
		</div>
	

</div><!-- #container -->
</div><!-- #main -->
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
