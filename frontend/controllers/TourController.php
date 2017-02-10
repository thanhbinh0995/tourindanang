<?php

namespace frontend\controllers;


use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\TourType;
/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends Controller

{
    public function actionIndex()
    {

        $tours = Tour::find()->limit(4)->orderBy('id DESC')->all(); 
        return $this->render('index', [
              'tours' => $tours
       
        ]);
    }


}
