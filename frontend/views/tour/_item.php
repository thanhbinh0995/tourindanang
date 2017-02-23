 <?php
    use yii\widgets\ListView;
	use common\widgets\ListWidget;

 ?>
 <h1 class="page-title"><?= $model->name ?></h1>
                 <?=   ListWidget::widget(['provider' => $model->provider]); ?>
