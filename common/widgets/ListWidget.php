<?php
namespace common\widgets;
use yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Type;
use yii\web\View;
use yii\web\JqueryAsset;
class ListWidget extends Widget 
{   
    public $provider;
    public function init()
    {
        parent::init();
    }

    public function run() {
        parent::run();
        return $this->render('_item', [
            'provider' => $this->provider,
            ]);
    }
}


