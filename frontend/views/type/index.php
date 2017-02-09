<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Type;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 
        var_dump(Type::listType());
    ?>
    
    
</div>
