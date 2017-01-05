<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Tour;
use common\models\Type;
/* @var $this yii\web\View */
/* @var $model common\models\TourType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-type-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour()) ?>

    <?= $form->field($model, 'typeId')->dropDownList(Type::listType()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
