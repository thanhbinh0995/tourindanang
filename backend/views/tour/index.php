<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tour', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 

        // $tour = new Tour();
        // var_dump($tour); 
        // var_dump($this);
        // exit();
        // foreach ($dataProvider as $tour) {
            // echo $tour . " <br/>";
            // var_dump($tour);
            
        // }
        // var_dump(Tour::listTour());
        // exit();
    
    ?>
    <?php 
       
        
        // Renders a export dropdown menu
       
        
        // // You can choose to render your own GridView separately
        // echo \kartik\grid\GridView::widget([
        //     'dataProvider' => $dataProvider,
        //     'filterModel' => $searchModel,
        //     'columns' => $gridColumns
        // ]);
    
    ?>
    <?php 
        $gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'dayTour',
            'info',
            // 'itinerary:ntext',
            // 'avatar',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',
             ['class' => 'yii\grid\ActionColumn',
                     'template'=>'{view} {update} {delete}',
                     'buttons'=>[
                            'view' => function ($url, $model) {     
                                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 'tour/'.$model->slug, ['title' => Yii::t('yii', 'View'),]);  
                             }
                        ],
            ],   
        ];
        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns
        ]);
         echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $gridColumns,
        ]); 

    ?>
</div>
