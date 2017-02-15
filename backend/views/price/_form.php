<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Util;
use common\models\Tour;
use common\models\Hotel;
/* @var $this yii\web\View */
/* @var $model common\models\Price */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour()) ?>

    <?= $form->field($model, 'hotelId')->dropDownList(Hotel::listHotel()) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

  

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
