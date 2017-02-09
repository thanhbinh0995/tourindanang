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
        // $dataProvider = $searchModel->find(Yii::$app->request->queryParams);
        // var_dump($searchModel);
        $dataProvider = $searchModel->find()->all();
        // var_dump($dataProvider);
        echo "<br/><br/><br/><br/>";
        $models = array();
        foreach ($dataProvider as $tour) {
            $model = $this->findModel($tour->id);
            $types = $model->Types;
            foreach ($types as $type ) {
                array_push($models,$type['typeId']);
            }
            // var_dump($types);
            // echo $tour->id ."<br/>";
        }
        // var_dump($models);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'models' => $models,
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
