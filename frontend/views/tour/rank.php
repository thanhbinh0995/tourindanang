<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $model common\models\Customer */

$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tour'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>   
    <div class="rank">
        <ul>
            <?php
                foreach($model->tourType as $tourtype){
            ?>
            <li >
                <div class="item-rank">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4 class="store-name">safd: <?= $tourtype->tour->name?></h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>