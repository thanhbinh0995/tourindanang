<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "address".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property TourAddress[] $tourAddresses
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public  $slug;
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourAddresses()
    {
        return $this->hasMany(TourAddress::className(), ['addressId' => 'id']);
    }
    public static function listAddress(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
}