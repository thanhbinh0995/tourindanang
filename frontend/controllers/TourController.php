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
        
        $searchModel = new Tour();
        $dataProvider = $searchModel->find()->all();

        echo "<br/><br/><br/><br/>";
        $addresses = [];
        foreach ($dataProvider as $tour) {
            $address = (new \yii\db\Query())
                ->select('a.name')
                ->from('address a')
                ->join('JOIN','tour_address ta','a.id = ta.addressId')
                ->join('JOIN','tour t','t.id = ta.tourId')
                ->where(['t.id' => $tour->id])
                ->all();
            array_push($addresses, ['tourName' => $tour->name, 'addressName' => $address]);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'addresses' => $addresses,
        ]);
    }

    /**
     * Displays a single Tour model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->render('index');
    }

}
