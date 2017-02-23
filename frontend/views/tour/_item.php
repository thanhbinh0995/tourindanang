 <?php
    use yii\widgets\ListView;

 ?>
 <h1 class="page-title"><?= $model->name ?></h1>
 <?= ListView::widget([
							
							'dataProvider' => $model->provider,
							'itemView' => '_article',

							
							'itemOptions' => [
								'tag' => false,
							],
							'summary' => '',
							

							'layout' => '{items}{pager}',

	

						]);
?>