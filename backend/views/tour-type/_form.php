<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Tour;
use common\models\Type;
use dosamigos\multiselect\MultiSelect;
/* @var $this yii\web\View */
/* @var $model common\models\TourType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-type-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour()) ?>

    <?= $form->field($model, 'typeId')->dropDownList(Type::listType()) ?>
    
    <?= 
            MultiSelect::widget([
        'id'=>"multiXX",
        "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => [ 0 => 'super', 7 => 'natural'], // data as array
        'value' => [ 0, 7], // if preselected
        'name' => 'multti', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 7
            ], 
    ]);    
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
