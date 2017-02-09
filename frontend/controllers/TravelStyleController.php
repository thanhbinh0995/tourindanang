<?php

namespace frontend\controllers;

class TravelStyleController extends \yii\web\Controller
{
    public function actionActiveTours()
    {
        return $this->render('active-tours');
    }

    public function actionBeachBreak()
    {
        return $this->render('beach-break');
    }

    public function actionFoodieTours()
    {
        return $this->render('foodie-tours');
    }

    public function actionGolfing()
    {
        return $this->render('golfing');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSightseeing()
    {
        return $this->render('sightseeing');
    }

}
