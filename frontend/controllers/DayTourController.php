<?php

namespace frontend\controllers;
use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Price;
use yii\data\ArrayDataProvider;
class DayTourController extends Controller
{
    public function actionView($dayTour)
    {
        $model = new Tour();
        $model = $model->find()
            ->where(['tour.dayTour' => $dayTour])
            ->all();
        $model = $this->getTourInfo($model);
        $name = ($dayTour == 1) ? "Day tour" : $dayTour." days";
        $provider= new ArrayDataProvider([
                'allModels' => $model,
                    'pagination' => [
                        'pageSize' => 2
                    ],
               ]);
        return $this->render('view', [
            'name' => $name,
            'provider' => $provider ]);
    }

     public function getTourInfo($tours){
        $tourAddress = [];
        $tourPrice =[];
        foreach($tours as $tour){
            $price = Price::find()->where(['tourId'=>$tour->id])->orderby('ninePax ASC')->one();
            if($price){
               $tour->price = $price->ninePax;
            }
        }
        return $tours;
    }

}
