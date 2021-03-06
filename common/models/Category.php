<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use cornernote\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $image
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Food[] $foods
 */
class Category extends \yii\db\ActiveRecord
{
    public $file_image;
    use \mootensai\relation\RelationTrait;
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'SoftDeleteBehavior' => [
                'class' => SoftDeleteBehavior::className(),
                'attribute' => 'deleted_at',
                'value' => time(), // for sqlite use - new \yii\db\Expression("date('now')")
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }
    
    public function beforeSoftDelete()
    {
        $this->deleted_at = time(); // log the deletion date
        return true;
    }

    public function beforeRestore()
    {
        return $this->deleted_at > (time() - 3600); // allow restoration only for the records, being deleted during last hour
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'image'], 'required'],
            [['created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 50],
            [['file_image'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => true],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'image' => Yii::t('app', 'Image'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFoods()
    {
        return $this->hasMany(Food::className(), ['category_id' => 'id']);
    }
    
    public static function listCategory(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }
    
    public function fields()
    {
        $fields = parent::fields();
        return $fields;
    }
    public function extraFields() 
    {
        return ['foods'];
    }

}
