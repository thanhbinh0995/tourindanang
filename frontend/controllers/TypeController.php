<?php

namespace frontend\controllers;
use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
class TypeController extends Controller
{
    public function actionView($typeId)
    {
        $model = new Tour();
        $dataProvider = $model->find()
            ->join('JOIN', 'tour_type tt', 'tour.id = tt.tourId')
            ->join('JOIN', 'type t', 'tt.typeId = t.id')
            ->where(['t.id' => $typeId])
            ->all();
        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

}
