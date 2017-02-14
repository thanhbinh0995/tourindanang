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
<body class="archive tax-travel-style term-active-tours term-27 single-author multi">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11660279-10', 'auto');
  ga('send', 'pageview');

</script>
<div id="wrapper">
	
<div id="main">

<div id="breadcrumbs" class="container_12 clearfix"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="../../index.html" rel="v:url" property="v:title">Home</a> » <span rel="v:child" typeof="v:Breadcrumb"><a href="../../tour/index.html" rel="v:url" property="v:title">Tours</a> » <span class="breadcrumb_last"><?php echo $model->name ?></span></span></span></span></div>	<div class="container_12 clearfix"><div id="content" class="grid_8 " role="main">
	<header class="page-header">
		<h1 class="page-title">Da Nang: <span><?php echo $model->name ?></span></h1>
	</header>
    <?php
		foreach($tours as $tour){
			if( checkTourAvailable($tour) ){
			
		?>
			<article id="<?php echo $tour->id ?>" class="<?php echo $tour->id ?> tour type-tour has-post-thumbnail ">
		<figure class="thumbt"><a href="../tour/view/<?= $tour->id ?>" title=" echo <?php $tour->name ?>"><img width="150" height="150" src="/api/uploads/<?php echo $tour->avatar ?>" class="img-polaroid featured-image wp-post-image" alt="minh mang tomb" title="<?php echo $tour->name ?>" /></a></figure>	<header class="entry-header">
		<h2 class="entry-title"><a href="../tour/view/<?= $tour->id ?>" title="<?php echo $tour->name ?>" rel="bookmark"><?php echo $tour->name ?></a></h2>	</header>
		
		<div class="entry-content clearfix">

		<span class='price'>from <span><?php echo $tourPrice[$tour->name] ?></span> </span><i class='fa fa-clock-o'></i> <a href='duration/day-tour/index'><?php echo ($tour->dayTour == 1) ?  "Day tour" :  $tour->dayTour." days" ?></a> &nbsp;&nbsp;<i class='fa fa-map-marker'></i> 

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

</body>


