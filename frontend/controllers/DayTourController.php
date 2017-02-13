<?php

namespace frontend\controllers;

class DayTourController extends \yii\web\Controller
{
    public function actionView($id)
    {
        $model = new Tour();
        $dataProvider = $model->find()
            ->where(['tour.dayTour' => $id])
            ->all();
        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

}
