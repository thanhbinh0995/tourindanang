<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\components\Util;
use common\models\Price;
/* @var $this yii\web\View */
/* @var $model common\models\Motel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'priceId')->dropDownList(Price::listPrice()) ?>

    <?= $form->field($model, 'numberPax')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
