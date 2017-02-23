<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "type".
 *
 * @property integer $id
 * @property string $name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property TourType[] $tourTypes
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $provider;
     public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    public static function tableName()
    {
        return 'type';
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourTypes()
    {
        return $this->hasMany(TourType::className(), ['typeId' => 'id']);
    }
    public function getTours()
    {
        // return $this->hasMany(Tour::className(), ['id' => 'tourId'])->viaTable('{{%tour_type}}', ['typeId' => 'id']);
        return $this->hasMany(Type::className(), ['id' => 'tourId'])->via('tourTypes');
    }
    public static function listType($id=NULL){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
    public static function getToursName($model)
    {
        $tours = array();
        $types = Type::find()->one();
        foreach($model->tourTypes as $tourType){
            array_push($tours, $tourType->tour);
        }
        return $tours;
    }

}
