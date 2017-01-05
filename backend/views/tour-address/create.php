<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TourAddress */

$this->title = 'Create Tour Address';
$this->params['breadcrumbs'][] = ['label' => 'Tour Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
