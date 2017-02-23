<?php
use common\models\Tour;
use yii\data\ActiveDataProvider;
use yii\widgets\Menu;
use common\components\Util;
use yii\widgets\ListView;

function checkTourAvailable($tourTemp){
	if( $tourTemp != NULL && $tourTemp->prices != NULL && Tour::getAddressesName($tourTemp) != null && Tour::getTypesName($tourTemp) != null)
		 return true;
	else return false;
}
?>
<body class="archive post-type-archive post-type-archive-tour single-author multi">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-11660279-10', 'auto');
  ga('send', 'pageview');

</script>

	
<div id="main">
    <div id="breadcrumbs" class="container_12 clearfix">
        <span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="../index.html" rel="v:url" property="v:title">Home</a> » <span class="breadcrumb_last">Tours</span></span></span>
    </div>
    <div class="container_12 clearfix">
        <div id="content" class="grid_8 " role="main">
             <?= ListView::widget([
							
							'dataProvider' => $listDataProvider,
							'itemView' => '_item',

							
							'itemOptions' => [
								'tag' => false,
							],
							'summary' => '',
							

							'layout' => '{items}{pager}',

	

						]);
			?>
        
    </div>
</body>


