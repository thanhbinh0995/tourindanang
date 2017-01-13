<?php

namespace common\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use common\models\Type;
use yii\db\ActiveQuery;
use common\models\TourType;
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
 * @property Touraddress[] $touraddresses
 * @property Tourtype[] $tourtypes
 */
class Tour extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file_image;
    public $types = array();
    public static function tableName()
    {
        return 'tour';
    }
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dayTour', 'info', 'itinerary', 'avatar'], 'required'],
            [['dayTour', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'info'], 'string', 'max' => 255],
            [['itinerary'], 'string'],
            [['avatar'], 'string', 'max' => 50],
            [['file_image'], 'file', 'extensions' => 'png, jpg','maxSize' => 1024 * 1024 * 2, 'skipOnEmpty' => true],
            [['types'], 'safe']
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
    public function getTouraddresses()
    {
        return $this->hasMany(Touraddress::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasMany(Type::className(), ['id'=>'typeId'])->viaTable(tourtype::tableName(), ['tourId' => 'id']);
    }
    public function getTourTypes()
    {
        return $this->hasMany(Tourtype::className(), ['tourId' => 'id']);
    }
    public static function listTour(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    public function getTypes(){
        $types = $this->getType();
        var_dump($types);
        exit();
        foreach ($types as $value) {
            # code...
            var_dump($value);
        }
        exit();

        // return ArrayHelper::map($types, 'id', 'desc');
        return ArrayHelper::index($types, 'typeId');
        // foreach ($types as $type){
            // $tourType = new tourType();

        // }
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
}
