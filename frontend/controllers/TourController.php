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
use common\models\Price;
use yii\data\ArrayDataProvider;

/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends Controller
{
    public function actionIndex()
    {
        $types = Type::find()->all();
        foreach($types as $type){
            $tours = $type->getToursName($type);
         
           if($tours){ 
               foreach($tours as $tour){
                     $tour = $this->getTourInfo($tour);
               }
               $provider= new ArrayDataProvider([
                'allModels' => $tours,
                    'pagination' => [
                        'pageSize' => 2
                    ],
               ]);
               $type->provider = $provider;
            }
        }
        $provider = new ArrayDataProvider([
            'allModels' => $types,  
        ]);
       
        return $this->render('index', ['listDataProvider' => $provider ]);
    }
    public function actionView($id)
    {
        $model = $this->findModel($id);  
        $model = $this->getTourInfo($model);
        $addressIds = $model->tourAddresses;
        $providerTourHotels = $model->tourHotels;
        $providerTourPrices = $model->prices;
        foreach($addressIds as  $addressId){
            $hotels = [];
            foreach( $addressId->address->hotel as $hotel){
                $hotels['name'] = $addressId->address->name;
                $hotels[$hotel->level] = $hotel->name;
            }
            $hotels = (object)$hotels;
            $providerAddressHotels [] =  $hotels;
        }
        $providerAddressHotels= new ArrayDataProvider([
                'allModels' => $providerAddressHotels,
        ]);
        $providerTourPrices= new ArrayDataProvider([
                'allModels' => $providerTourPrices,
        ]);
        $providerTourHotels= new ArrayDataProvider([
                'allModels' => $providerTourHotels,
        ]);
        return $this->render('view', ['model' => $model,
                'providerAddressHotels' => $providerAddressHotels, 
                'providerTourPrices' => $providerTourPrices,
                'providerTourHotels' => $providerTourHotels,
        ]);

    }

    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function getTourInfo($tour){
        $tourAddress = [];
        $tourPrice =[];
            $addresses =Tour::getAddressesName($tour);
            $addresses = explode(', ',$addresses);
            if($addresses) $tour->address = $addresses;
            $price = Price::find()->where(['tourId'=>$tour->id])->orderby('ninePax ASC')->one();
            if($price){
               $tour->price = $price->ninePax;
        }
        return $tour;
    }
   
}
