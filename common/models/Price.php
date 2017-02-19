<?php

namespace common\models;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "price".
 *
 * @property integer $id
 * @property integer $tourId
 * @property string $name
 * @property integer $twoPax
 * @property integer $threeFivePax
 * @property integer $sixEightPax
 * @property integer $ninePax
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Motel[] $motels
 * @property Tour $tour
 */
class Price extends \yii\db\ActiveRecord
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
        return 'price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tourId', 'name', 'twoPax', 'threeFivePax', 'sixEightPax', 'ninePax'], 'required'],
            [['tourId', 'twoPax', 'threeFivePax', 'sixEightPax', 'ninePax'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'name' => 'Name',
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
    public function getMotels()
    {
        return $this->hasMany(Motel::className(), ['priceId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tour::className(), ['id' => 'tourId']);
    }

    public static function listPrice($id=NULL){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}
