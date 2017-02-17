<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;
use common\models\Address;
use Yii;

/**
 * This is the model class for table "hotel".
 *
 * @property integer $id
 * @property integer $addressId
 * @property string $name
 * @property string $level
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Hotel extends \yii\db\ActiveRecord
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
        return 'hotel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['addressId', 'name', 'level'], 'required'],
            [['addressId', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'level'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'addressId' => 'Address ID',
            'name' => 'Name',
            'level' => 'Level',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
    public function getAddress()
    {
        return $this->hasMany(Address::className(), ['id' => 'addressId']);
    }
}
