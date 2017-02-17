<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "tour_hotel".
 *
 * @property integer $id
 * @property integer $tourId
 * @property string $level
 * @property integer $twoPax
 * @property integer $threeFivePax
 * @property integer $sixEightPax
 * @property integer $ninePax
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Tour $tour
 */
class TourHotel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
      public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }
    public static function tableName()
    {
        return 'tour_hotel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tourId', 'level', 'twoPax', 'threeFivePax', 'sixEightPax', 'ninePax'], 'required'],
            [['tourId', 'twoPax', 'threeFivePax', 'sixEightPax', 'ninePax'], 'integer'],
            [['level'], 'string', 'max' => 255],
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
            'level' => 'Level',
            'twoPax' => 'Two Pax',
            'threeFivePax' => 'Three Five Pax',
            'sixEightPax' => 'Six Eight Pax',
            'ninePax' => 'Nine Pax',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tourId']);
    }
}
