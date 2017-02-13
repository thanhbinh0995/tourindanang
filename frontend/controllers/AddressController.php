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
class AddressController extends \yii\web\Controller
{
    public function actionView($id)
    {
        $model = new Tour();
        $dataProvider = $model->find()
            ->join('JOIN', 'tour_address ta', 'tour.id = ta.tourId')
            ->join('JOIN', 'address a', 'ta.addressId = a.id')
            ->where(['a.id' => $id])
            ->all();
        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }

}
