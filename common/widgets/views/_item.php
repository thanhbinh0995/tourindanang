<?php use yii\widgets\ListView;
?>
<?= ListView::widget([
							
							'dataProvider' => $provider,
							'itemView' => '_article',

							
							'itemOptions' => [
								'tag' => false,
							],
							'summary' => '',
							

							'layout' => '{items}{pager}',

							'pager' => [
								'firstPageLabel' => 'First',
								'lastPageLabel' => 'Last',
								'maxButtonCount' => 2,
							
							],

						]);
?>