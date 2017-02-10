<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Tour;
use common\models\Type;
use common\models\Address;
/* @var $this yii\web\View */
/* @var $model common\models\Tour */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="tour-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
        var_dump($model);
        exit();
        
        echo Tour::getTypesName($model) . "</br>";
        // echo "1,22,,2,2,2";
        // foreach (Address::listAddress() as $address) {
        //     echo "address is: " . $address . "<br/>";
        // }
    ?>
    <?php 
    //     echo DetailView::widget([
    //     'model' => $model,
    //     'attributes' => [
    //         'id',
    //         'name',
    //         'dayTour',
    //         'info',
    //         'itinerary:ntext',
    //         'avatar',
    //         'created_at',
    //         'updated_at',
    //         'deleted_at',
    //     ],
    // ]) 
    ?>

</div>
