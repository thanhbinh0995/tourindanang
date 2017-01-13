<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\components\Util;
use common\models\Type;
use common\models\Tour;
use yii\redactor\widgets\Redactor;
use dosamigos\multiselect\MultiSelect;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model common\models\Tour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dayTour')->textInput() ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'itinerary')->widget(Redactor::className(), [
        'clientOptions' => [
            'minHeight'=> 200, // pixels
        ]
    ]) ?>
    
    <?php 
        // Multiple select without model
        $data = Type::listType();
        echo $form->field($model, 'types')->widget(Select2::classname(), [
            'data' => $data,
            'language' => 'de',
            'options' => ['multiple' => true, 'placeholder' => 'Select states ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'file_image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions'=>['jpg', 'gif', 'png'],
            'initialPreview'=>[
                Html::img(Util::getUrlImage($model->avatar))
            ],
            'overwriteInitial'=>true,
            'showUpload' => false,
            'showCaption' => false,
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
