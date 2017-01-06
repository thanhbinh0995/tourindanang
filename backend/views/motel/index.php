<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Price;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MotelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Motels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Motel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          
            [
                'attribute' => 'priceId',
                'filter' => Price::listPrice(),
                'value' => function ($model) {
                    return $model->price->info;
                },
            ],
            'numberPax',
            'price',
     
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
