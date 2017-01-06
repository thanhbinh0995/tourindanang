<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use common\components\Util;
use common\models\Tour;

/* @var $this yii\web\View */
/* @var $model common\models\Image */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="image-form">

    <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data'] // important
    ]); ?>  

    <?= $form->field($model, 'tourId')->dropDownList(Tour::listTour()) ?>

    <?= $form->field($model, 'file')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions'=>['jpg', 'gif', 'png'],
            'initialPreview'=>[
                Html::img(Util::getUrlImage($model->name))
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
