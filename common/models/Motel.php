<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "motel".
 *
 * @property integer $id
 * @property integer $priceId
 * @property integer $numberPax
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Price $price0
 */
class Motel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['priceId', 'numberPax', 'price', 'created_at', 'updated_at'], 'required'],
            [['priceId', 'numberPax', 'price', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['priceId'], 'exist', 'skipOnError' => true, 'targetClass' => Price::className(), 'targetAttribute' => ['priceId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'priceId' => 'Price ID',
            'numberPax' => 'Number Pax',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrice0()
    {
        return $this->hasOne(Price::className(), ['id' => 'priceId']);
    }
}
