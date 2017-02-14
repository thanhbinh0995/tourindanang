<?php

namespace frontend\controllers;
use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class DayTourController extends Controller
{
    public function actionView($dayTour)
    {
        $model = new Tour();
        $dataProvider = $model->find()
            ->where(['tour.dayTour' => $dayTour])
            ->all();
        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

}
