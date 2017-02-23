<?php
namespace common\widgets;
use yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\Type;
use yii\web\View;
use yii\web\JqueryAsset;
class HelloWidget extends Widget 
{   
    public $typesName;
    public $addressesName;
    public $days;
    public $content;
    public function init()
    {
        parent::init();
        $this->typesName = (new \yii\db\Query())
                ->select('id,name')
                ->from('type')
                ->all();
        $this->addressesName = (new \yii\db\Query())
                ->select('id,name')
                ->from('address')
                ->all();     
        $this->days = (new \yii\db\Query())
                ->select('dayTour')
                ->from('tour')
                ->all(); 
    }

    public function run() {
        parent::run();
        return $this->render('main', [
            'typesName' => $this->typesName,
            'addressesName' => $this->addressesName,
            'days' => $this->days,
            'content' => $this->content,
            ]);
    }
}


