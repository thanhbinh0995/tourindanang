<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
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
class Tour extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['name', 'dayTour', 'info', 'itinerary', 'avatar', 'created_at', 'updated_at', 'deleted_at'], 'required'],
            [['dayTour', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'info', 'itinerary'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 50],
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
    public function getTourtypes()
    {
        return $this->hasMany(Tourtype::className(), ['tourId' => 'id']);
    }
    public static function listTour(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
