<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "touraddress".
 *
 * @property integer $id
 * @property integer $tourId
 * @property integer $addressId
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Address $address
 * @property Tour $tour
 */
class TourAddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'touraddress';
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
            [['tourId', 'addressId'], 'required'],
            [['tourId', 'addressId', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['addressId'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['addressId' => 'id']],
            [['tourId'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['tourId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tourId' => 'Tour ID',
            'addressId' => 'Address ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddress()
    {
        return $this->hasOne(Address::className(), ['id' => 'addressId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tourId']);
    }
}
