<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TourAddress */

$this->title = 'Update Tour Address: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tour Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tour-address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
