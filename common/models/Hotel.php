<?php

namespace common\models;

use Yii;

use yii\behaviors\TimestampBehavior;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "hotel".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $level
 * @property integer $hotelPrice
 * @property integer $hotelNumberPax
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Price[] $prices
 */
class Hotel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel';
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
            [['name', 'address', 'level', 'hotelPrice', 'hotelNumberPax',], 'required'],
            [['hotelPrice', 'hotelNumberPax', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'address', 'level'], 'string', 'max' => 255],
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
            'address' => 'Address',
            'level' => 'Level',
            'hotelPrice' => 'Hotel Price',
            'hotelNumberPax' => 'Hotel Number Pax',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
                        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['hotelId' => 'id']);
    }
      public static function listHotel(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
