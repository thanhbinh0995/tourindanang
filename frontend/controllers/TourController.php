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
/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends Controller
{
    public function actionIndex()
    {
        $types = Type::find()->all();
        $tourType = [];
        foreach($types as $type){
            $tours = $type->getToursName($type);
            if($tours) $tourType[$type->name] = $tours;
        }
        $tours = Tour::find()->limit(4)->orderBy('id DESC')->all(); 
        $tourAddress = [];
        $tourPrice =[];
        foreach($tours as $tour){
            $addresses =Tour::getAddressesName($tour);
            $addresses = explode(', ',$addresses);
            if($addresses) $tourAddress[$tour->name] = $addresses;
            $price = Price::find()->where(['tourId'=>$tour->id])->orderby('ninePax ASC')->one();
            if($price){
               $tourPrice[$tour->name] = $price->ninePax;
            }
        }
        $typesName = (new \yii\db\Query())
                ->select('name')
                ->from('type')
                ->all();
        $addressesName = (new \yii\db\Query())
                ->select('name')
                ->from('address')
                ->all();     
        $days = (new \yii\db\Query())
                ->select('dayTour')
                ->from('tour')
                ->all();  
        return $this->render('index', [
            'tourAddress' => $tourAddress,
            'tourPrice' => $tourPrice,
            'addresses' => $addresses,
            'types' => $types,
            'tourType' => $tourType,
            'typesName' => $typesName,
            'addressesName' => $addressesName,
            'days' => $days,       
            'days' => $days,
        ]);
    }
    public function actionView($id)
    {
        $model = $this->findModel($id);   
        $addresses = $model->getAddressesName($model);
        $addresses = explode(', ',$addresses);
        $addressIds = $model->tourAddresses;
        $addressHotel = [];
        $tourHotels = $model->tourHotels;
        $tourPrices = $model->prices;
        foreach($addressIds as  $addressId){
            
            //$addressHotel[$addressId->address->name] = $addressId->address->hotel;
            foreach( $addressId->address->hotel as $hotel){
                $addressHotel[$addressId->address->name][$hotel->level] = $hotel->name;
            }
        }
        return $this->render('view', [
            'model' => $model,
            'addresses' => $addresses,
            'price' => $model->prices,
            'tourHotel' => $model->tourHotels,
            'addressHotel' => $addressHotel,
            'tourHotels' => $tourHotels,
            'tourPrices' => $tourPrices,
            
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
    
    // protected function findModelBySlug($slug)
    // {
    //     if (($model = Post::findOne(['slug' => $slug])) !== null) {
    //         return $model;
    //     } else {
    //         throw new NotFoundHttpException();
    //     }
    // }

}
