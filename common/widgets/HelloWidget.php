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
    public $message;
    public $content;
    public function init()
    {
        parent::init();
        $this->typesName = (new \yii\db\Query())
                ->select('id,name')
                ->from('type')
                ->all();
        // var_dump($this->typesTest);
        // exit();
        $this->addressesName = (new \yii\db\Query())
                ->select('id,name')
                ->from('address')
                ->all();     
        $this->days = (new \yii\db\Query())
                ->select('dayTour')
                ->from('tour')
                ->all(); 
       // $this->message = "Hello Yiifdfa2";
    }

    public function run() {
        parent::run();
        // HelloWidget::register($this->getView());
        // return $this->render('main', ['message' => $this->message]);
        return $this->render('main', [
            'typesName' => $this->typesName,
            'addressesName' => $this->addressesName,
            'days' => $this->days,
            'content' => $this->content,
            ]);
        // return $this->render('@frontend/views/site/index', ['typesTest' => $this->typesTest]);
    }
}


