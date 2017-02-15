<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TourType */

$this->title = 'Create Tour Type';
$this->params['breadcrumbs'][] = ['label' => 'Tour Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
