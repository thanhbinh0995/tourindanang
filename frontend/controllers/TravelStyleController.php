<?php

namespace frontend\controllers;
use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\TourType;
use common\models\Type;
use common\models\Price;

class TravelStyleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($typeId)
    {
        $model = Type::find()->where(['id'=>$typeId])->one();
        $tours = $model->getToursName($model);
        $tourAddress = [];
        $tourPrice =[];
        foreach($tours as $tour){
            $addresses =Tour::getAddressesName($tour);
            $addresses = explode(', ',$addresses);
            if($addresses) $tourAddress[$tour->name] = $addresses;
            $price = Price::find()->where(['tourId'=>$tour->id])->orderby('id ASC')->one();
            if($price){
               $tourPrice[$tour->name] = $price->info;
            }
        }
        return $this->render('view',[
            'model' => $model,
            'tours' => $tours,
            'tourAddress' => $tourAddress,
            'tourPrice' => $tourPrice,
        ]);
    }

}
