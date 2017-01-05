<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Tour;
use common\models\Address;
/* @var $this yii\web\View */
/* @var $model common\models\TourAddress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-address-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour()) ?>

    <?= $form->field($model, 'addressId')->dropDownList(Address::listAddress()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
