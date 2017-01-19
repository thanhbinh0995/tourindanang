<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use common\models\Type;
use yii\db\ActiveQuery;
use common\models\TourType;
use arogachev\ManyToMany\behaviors\ManyToManyBehavior;
/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property string $name
 * @property integer $dayTour
 * @property string $info
 * @property string $itinerary
 * @property string $avatar
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Image[] $images
 * @property Price[] $prices
 * @property TourType[] $tourTypes
 * @property Touraddress[] $touraddresses
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file_image;
    public $types = array();
    public $addresses = array();
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => ManyToManyBehavior::className(),
            ],
        ];
    }
    public static function tableName()
    {
        return 'tour';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dayTour', 'info', 'itinerary', 'avatar','types','addresses'], 'required'],
            [['dayTour', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['itinerary'], 'string'],
            [['name', 'info'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 50],
            [['file_image'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => true],
            [['types'], 'safe'],
            [['addresses'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'dayTour' => 'Day Tour',
            'info' => 'Info',
            'itinerary' => 'Itinerary',
            'avatar' => 'Avatar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourTypes()
    {
        return $this->hasMany(TourType::className(), ['tourId' => 'id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourAddresses()
    {
        return $this->hasMany(TourAddress::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public static function listTour(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    public function getTypes()
    {
        $types = TourType::findAll([
            'tourId' => $this->id,
        ]);
        return $types;
    }

    public function setTypes(){
        $values = $this->types;
        foreach ($values as $value) {
            $tourType = new TourType();
            $tourType->tourId = $this->id;
            $tourType->typeId = $value;
            $tourType->save();
        }
    }
    public function deleteTypes()
    {
        $values = TourType::findAll([
            'tourId' => $this->id,
        ]);
        foreach($values as $value) {
            $value->delete();
        }
    }

    public function getAddresses()
    {
        $addresses = TourAddress::findAll([
            'tourId' => $this->id,
        ]);
        return $addresses;
    }

    public function setAddresses(){
        $values = $this->addresses;
        foreach ($values as $value) {
            $tourAddress = new TourAddress();
            $tourAddress->tourId = $this->id;
            $tourAddress->addressId = $value;
            $tourAddress->save();
        }
    }
    public function deleteAddresses()
    {
        $values = TourAddress::findAll([
            'tourId' => $this->id,
        ]);
        foreach($values as $value) {
            $value->delete();
        }
    }
    public static  function toString($arrays)
    {
        $text = '';
        foreach($arrays as $array){
            $text.= "d";
            $text.=" ";
        }
        return $text;
        
    }
    public static function toStringArray($array, $listDetailView){
      //  $array = $this->getTypes();
     // $typeNames = Type::listType();
      for($i = 0; $i < count($array); $i++){
          $array[$i] = $listDetailView[$array[$i]];
         
      }
      return implode('<br/>', $array);
      return $text;
        
    }

}
