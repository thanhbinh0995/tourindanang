<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Tour;
use common\models\Type;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
        var_dump($models);
        // $tour = new Tour();
        // var_dump($tour); 
        // var_dump($this);
        // exit();
        // foreach ($dataProvider as $tour) {
            // var_dump($tour)." <br/>";
        // }
        // var_dump(Tour::listTour());
        // exit();
    
    ?>
    <?php 
    // echo  GridView::widget([
    //     'dataProvider' => $dataProvider,
    //     'filterModel' => $searchModel,
    //     'columns' => [
    //         ['class' => 'yii\grid\SerialColumn'],

    //         'id',
    //         'name',
    //         'dayTour',
    //         'info',
    //         // 'itinerary:ntext',
    //         // 'created_at',
    //         // 'updated_at',
    //         // 'deleted_at',

    //         ['class' => 'yii\grid\ActionColumn'],
    //     ],
    // ]); 
    ?>
</div>
