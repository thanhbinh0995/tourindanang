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
class Tour extends \alexinator1\jta\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file_image;
    public $types = array();
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
            [['name', 'dayTour', 'info', 'itinerary', 'avatar'], 'required'],
            [['dayTour', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['itinerary'], 'string'],
            [['name', 'info'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 50],
            [['file_image'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => true],
            [['types'], 'safe'],
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
        // return $this->hasMany(Type::className(), ['id' => 'typeId'])
        //     ->viaTable('tour_type', ['tourId' => 'id']);
    }
    public function getTypes()
    {
        return $this->hasMany(Type::className(), ['id' => 'typeId'])->viaTable('{{%tour_type}}', ['tourId' => 'id']);
        // return $this->hasMany(Type::className(), ['id' => 'typeId'])->via('tourTypes');
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTouraddresses()
    {
        return $this->hasMany(Touraddress::className(), ['tourId' => 'id']);
    }

    public static function listTour(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    // public function getTypes(){
        // $types = $this->getTourTypes();
        // $types = TourType::find()->where(['tourId' => 'id']);
        // var_dump($types);
        // echo $this->id;
        // exit();
        // return $types;
        // return ArrayHelper::index($types, 'id');
        // $tour = Tour::findOne($this->id);
        // return $this->hasMany(Tour::className(), ['id' => 'tourId'])->viaTable('tour_type', ['typeId' => 'id']);
        // var_dump($types);
        // exit();
        // return $types;
        // return $this->types;
        // return $this->hasMany(TourType::className(), ['tourId' => 'id']);
        // return ArrayHelper::index($types, 'tourId');
    // }

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
