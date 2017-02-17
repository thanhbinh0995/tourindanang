<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TourHotelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-hotel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tourId') ?>

    <?= $form->field($model, 'level') ?>

    <?= $form->field($model, 'twoPax') ?>

    <?= $form->field($model, 'threeFivePax') ?>

    <?=   $form->field($model, 'sixEightPax') ?>

    <?=  $form->field($model, 'ninePax') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
