<?php

namespace frontend\controllers;


class TourController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $tours = Tour::find()->limit(4)->orderBy('id DESC')->all(); 
        return $this->render('index', [
              'tours' => $tours
       
        ]);
    }

}
