<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
            'itinerary:ntext',
            // [
            //     'label' => 'Types',
            //     'format' => 'ntext',
            //     'attribute'=>'types',
            //     'value' => function($model) {
            //         foreach ($model->types as $type) {
            //             $types[] = $group->types;
            //         }
            //         return implode("\n", $groupNames);
            //     },
            // ],
            'avatar',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
