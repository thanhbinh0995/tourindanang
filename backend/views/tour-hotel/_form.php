<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Tour;
/* @var $this yii\web\View */
/* @var $model common\models\TourHotel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-hotel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour())  ?>

    <?= $form->field($model, 'level')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twoPax')->textInput() ?>

    <?= $form->field($model, 'threeFivePax')->textInput() ?>

    <?= $form->field($model, 'sixEightPax')->textInput() ?>

    <?= $form->field($model, 'ninePax')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
