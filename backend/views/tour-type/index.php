<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tour;
use common\models\Type;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TourTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tour Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tour Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
              [
                'attribute' => 'tourId',
                'filter' => Tour::listTour(),
                'value' => function ($model) {
                    return $model->tour->name;
                },
            ],
            [
                'attribute' => 'typeId',
                'filter' => Type::listType(),
                'value' => function ($model) {
                    return $model->type->name;
                },
            ],
            
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
