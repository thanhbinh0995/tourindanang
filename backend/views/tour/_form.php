<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\components\Util;
use common\models\Type;
use common\models\Address;
use common\models\Tour;
use yii\redactor\widgets\Redactor;
use dosamigos\multiselect\MultiSelect;
use kartik\select2\Select2;
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>    

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dayTour')->textInput() ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'itinerary')->widget(Redactor::className(), [
        'clientOptions' => [
            'minHeight'=> 200,
        ]
    ]) ?>
    
    <?php 
        $data_types = Type::listType();
        echo $form->field($model, 'types')->widget(Select2::classname(), [
            'data' => $data_types,
            'language' => 'de',
            'options' => ['multiple' => true, 'placeholder' => 'Select states ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>
    <?php 
        $data_addresses = Address::listAddress();
        echo $form->field($model, 'addresses')->widget(Select2::classname(), [
            'data' => $data_addresses,
            'language' => 'de',
            'options' => ['multiple' => true, 'placeholder' => 'Select address ...'],
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
