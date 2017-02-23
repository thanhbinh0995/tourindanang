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
               $tours = $this->getTourInfo($tours);
        //           var_dump($tours);
        // exit();
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
        $test = ['a'=>'b'];
        $test =(object)$test;
        
        $model = $this->findModel($id);  
        $addresses =Tour::getAddressesName($model);
            $addresses = explode(', ',$addresses);
            if($addresses) $model->addresses = $addresses;
            $price = Price::find()->where(['tourId'=>$model->id])->orderby('ninePax ASC')->one();
            if($price){
               $model->price = $price->ninePax;
        }
        $addressIds = $model->tourAddresses;
        $addressHotels = [];
        
        $tourHotels = $model->tourHotels;
        $tourPrices = $model->prices;
        foreach($addressIds as  $addressId){
            $hotels = [];
            foreach( $addressId->address->hotel as $hotel){
                $hotels['name'] = $addressId->address->name;
                $hotels[$hotel->level] = $hotel->name;
            }
            $hotels = (object)$hotels;
            $addressHotels [] =  $hotels;
        }
    
        $addressHotels= new ArrayDataProvider([
                'allModels' => $addressHotels,
        ]);
        $model->addressHotel = $addressHotels;
       
        $tourPrices= new ArrayDataProvider([
                'allModels' => $tourPrices,
        ]);
        $model->tourPrice = $tourPrices;

        $tourHotels= new ArrayDataProvider([
                'allModels' => $tourHotels,
        ]);
        $model->tourHotel = $tourHotels;
      
 
        return $this->render('view', ['model' => $model ]);

    }

    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionSlug($slug)
    { 
        $model = Tour::find()->where(['slug'=>$slug])->one();
        $types = $model->getTypes();
        $addresses = $model->getAddresses();
            foreach ($types as $type ) {
            array_push($model->types,$type['typeId']);
        }
        foreach ($addresses as $address ) {
            array_push($model->addresses,$address['addressId']);
        }
        if (!is_null($model)) {
            return $this->render('view', [
                'model' => $model,
            ]);      
        } else {
            return $this->redirect('/tour/index');
        }
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
   
}
