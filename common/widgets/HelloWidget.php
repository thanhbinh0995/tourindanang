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
    public $typesTest;
    public $message;
    public function init()
    {
        parent::init();
        $this->typesTest = (new \yii\db\Query())
                ->select('id,name')
                ->from('type')
                ->all();
        // var_dump($this->typesTest);
        // exit();
        // $addressesName = (new \yii\db\Query())
        //         ->select('id,name')
        //         ->from('address')
        //         ->all();     
        // $days = (new \yii\db\Query())
        //         ->select('dayTour')
        //         ->from('tour')
        //         ->all(); 
        $this->message = "Hello Yiifdfa2";
    }

    public function run() {
        parent::run();
        // HelloWidget::register($this->getView());
        // return $this->render('main', ['message' => $this->message]);
        return Html::encode($this->render('main', ['typesTest' => $this->typesTest]));
        // return $this->render('@frontend/views/site/index', ['typesTest' => $this->typesTest]);
    }
}


