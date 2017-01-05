<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\Util;
/* @var $this yii\web\View */
/* @var $model common\models\Tour */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'dayTour',
            'info',
            'itinerary',
            [
                'attribute'=>'image',
                'value'=>  Util::getUrlImage($model->avatar),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
