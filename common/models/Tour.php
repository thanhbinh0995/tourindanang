<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property integer $dayTour
 * @property string $itinerary
 * @property string $type
 * @property string $info
 * @property string $image
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Price[] $prices
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
            [['name', 'address', 'dayTour', 'itinerary', 'type', 'info', 'image', 'created_at', 'updated_at'], 'required'],
            [['dayTour', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'address', 'itinerary', 'type', 'info'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 50],
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
            'dayTour' => 'Day Tour',
            'itinerary' => 'Itinerary',
            'type' => 'Type',
            'info' => 'Info',
            'image' => 'Image',
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
        return $this->hasMany(Price::className(), ['tourId' => 'id']);
    }
}
