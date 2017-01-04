<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Motel */

$this->title = 'Create Motel';
$this->params['breadcrumbs'][] = ['label' => 'Motels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
