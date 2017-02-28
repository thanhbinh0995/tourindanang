<?php

namespace frontend\controllers;
use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Price;
use common\models\Type;
use yii\data\ArrayDataProvider;

class TypeController extends Controller
{
    public function actionView($typeId)
    {
        $model = new Tour();
        $model = $model->find()
            ->join('JOIN', 'tour_type tt', 'tour.id = tt.tourId')
            ->join('JOIN', 'type t', 'tt.typeId = t.id')
            ->where(['t.id' => $typeId])
            ->all();
        $model = $this->getTourInfo($model);
        $provider= new ArrayDataProvider([
                'allModels' => $model,
                    'pagination' => [
                        'pageSize' => 2
                    ],
               ]);
        $name = $this->findModel($typeId)->name;
        return $this->render('view', [
            'provider' => $provider,
            'name' => $name,
             ]);

    }

    public function getTourInfo($tours){
        $tourAddress = [];
        $tourPrice =[];
        foreach($tours as $tour){
            $addresses =Tour::getAddressesName($tour);
            $addresses = explode(', ',$addresses);
            if($addresses) $tour->address = $addresses;
            $price = Price::find()->where(['tourId'=>$tour->id])->orderby('ninePax ASC')->one();
            if($price){
               $tour->price = $price->ninePax;
            }
        }
        return $tours;
    }

    protected function findModel($id)
    {
        if (($model = Type::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
