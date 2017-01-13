<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Tour;
use common\models\Type;
use dosamigos\multiselect\MultiSelect;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\TourType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-type-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour()) ?>
    
    <?php 
        // Multiple select without model
        $data = Type::listType();

        echo Select2::widget([
            'name' => 'typeId',
            'value' => '',
            'data' => $data,
            'options' => ['multiple' => true, 'placeholder' => 'Select states ...']
        ]);
    ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
