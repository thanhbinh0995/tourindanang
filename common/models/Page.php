<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use cornernote\softdelete\SoftDeleteBehavior;
/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

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
    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['content'], 'string'],
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
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'content' => Yii::t('app', 'Content'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
        ];
    }
}
