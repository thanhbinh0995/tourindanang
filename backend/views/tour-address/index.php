<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tour;
use common\models\Address;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TourAddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tour Addresses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-address-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tour Address', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'addressId',
                'filter' => Address::listAddress(),
                'value' => function ($model) {
                    return $model->address->name;
                },
            ],
//            'created_at',
//            'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
