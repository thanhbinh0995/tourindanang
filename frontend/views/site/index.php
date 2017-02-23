<?php
use common\models\Tour;
use yii\data\ActiveDataProvider;
use yii\widgets\Menu;
use yii\data\ArrayDataProvider;
use yii\widgets\LinkPager;
use common\widgets\HelloWidget;
use common\components\Util;
use yii\widgets\ListView;
use common\widgets\ListWidget;


function checkTourAvailable($tourTemp){
	if( $tourTemp != NULL && $tourTemp->prices != NULL && Tour::getAddressesName($tourTemp) != null && Tour::getTypesName($tourTemp) != null)
		 return true;
	else return false;
}
?>
<body class="home blog single-author multi">
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
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-11660279-10', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="wrapper">
        <div id="main">
            <div class="featured-wrapper clearfix">
                <div class="container_12 clearfix">
                    <div id="content" class="grid_12" role="main">
                        <?php 
							$count=0 ; 
						
							foreach($listDataProvider->allModels as $tour){ 
					
								if(checkTourAvailable($tour)){ 
									$idFeature = $tour->id; ?>
									<article id="<?php echo $tour->id ?>" class="landing">
										<div id="landing-text" class="one_half alpha">
											<h1><?php echo $tour->name ?></h1>
											<p>
												<?php echo $tour->info ?></p>
											<p class="action-full"><a class="btn btn-primary btn-large" href="tour/view/<?= $tour->id ?>">See details</a>
											</p>
										</div>
										<div id="landing-media" class="one_half omega">
											<p><img src="<?=  Util::getUrlImage($tour->avatar)  ?>" alt="<?php echo $tour->name ?>" />
											</p>
										</div>
									</article>
                        <?php 
								break; } 
								$count++; 
							} 
							if($count == count($listDataProvider->allModels)) { 
						?>
							<article class="landing">
								<div id="landing-text" class="one_half alpha"></div>
								<p>Tour not found</p>
								<div id="landing-media" class="one_half omega"></div>
							</article>
                        	<?php } ?>

                    </div>
                </div>
                <!-- #container -->
            </div>
            <!-- featured wrapper -->
            <div class="container_12 clearfix">

                <div id="home-widget-area" class="clearfix">
                </div>
                <div id="content" class="grid_8 " role="main">
                                   <?=   ListWidget::widget(['provider' => $listDataProvider]); ?>

                </div>
</body>