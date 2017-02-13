<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use common\models\Type;
use yii\db\ActiveQuery;
use common\models\TourType;
use common\models\Image;
use yii\behaviors\SluggableBehavior;
use arogachev\ManyToMany\behaviors\ManyToManyBehavior;
/**
 * This is the model class for table "tour".
 *
 * @property integer $id
 * @property string $name
 * @property integer $dayTour
 * @property string $info
 * @property string $itinerary
 * @property string $avatar
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Image[] $images
 * @property Price[] $prices
 * @property TourType[] $tourTypes
 * @property Touraddress[] $touraddresses
 */
class Tour extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file_image;
    public $types = array();
    public $addresses = array();
    public $slug;
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
                'class' => ManyToManyBehavior::className(),
            ],
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                // 'slugAttribute' => 'slug',
            ],
            
            // 'slug' => [
            //     'class' => 'Zelenin\yii\behaviors\Slug',
            //     'slugAttribute' => 'slug',
            //     'attribute' => 'name',
            //     // optional params
            //     'ensureUnique' => true,
            //     'replacement' => '-',
            //     'lowercase' => true,
            //     'immutable' => false,
            //     // If intl extension is enabled, see http://userguide.icu-project.org/transforms/general. 
            //     'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            //  ]
        ];
    }
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
            [['name', 'dayTour', 'info', 'itinerary', 'avatar','types','addresses'], 'required'],
            [['dayTour', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['itinerary'], 'string'],
            [['name', 'info','slug'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 50],
            [['file_image'], 'file', 'extensions' => 'png, jpg', 'skipOnEmpty' => true],
            [['types', 'slug'], 'safe'],
            [['addresses'], 'safe'],
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
            'dayTour' => 'Day Tour',
            'info' => 'Info',
            'itinerary' => 'Itinerary',
            'avatar' => 'Avatar',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrices()
    {
        return $this->hasMany(Price::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourTypes()
    {
        return $this->hasMany(TourType::className(), ['tourId' => 'id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTourAddresses()
    {
        return $this->hasMany(TourAddress::className(), ['tourId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public static function listTour(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    public function getTypes()
    {
        $types = TourType::findAll([
            'tourId' => $this->id,
        ]);
        return $types;
    }
    
    public function setTypes(){
        $values = $this->types;
        foreach ($values as $value) {
            $tourType = new TourType();
            $tourType->tourId = $this->id;
            $tourType->typeId = $value;
            $tourType->save();
        }
    }
    public function deleteTypes()
    {
        $values = TourType::findAll([
            'tourId' => $this->id,
        ]);
        foreach($values as $value) {
            $value->delete();
        }
    }

    public function getAddresses()
    {
        $addresses = TourAddress::findAll([
            'tourId' => $this->id,
        ]);
        return $addresses;
    }

    public function setAddresses(){
        $values = $this->addresses;
        foreach ($values as $value) {
            $tourAddress = new TourAddress();
            $tourAddress->tourId = $this->id;
            $tourAddress->addressId = $value;
            $tourAddress->save();
        }
    }
    public function deleteAddresses()
    {
        $values = TourAddress::findAll([
            'tourId' => $this->id,
        ]);
        foreach($values as $value) {
            $value->delete();
        }
    }

    public static function getTypesName($model)
    {
        $types = array();
        $tours = Tour::find()->one();
        foreach($model->tourTypes as $tourType){
            array_push($types, $tourType->type->name);
        }
        return implode(", ",$types);
    }

    public static function getAddressesName($model){
      //  $array = $this->getTypes();
     // $typeNames = Type::listType();
     $addresses = array();
      foreach($model->tourAddresses as $tourAddress){
            $addresses[] = $tourAddress->address->name;
        }
        return implode(", ",$addresses);   
    }

    public static function getPricesName()
    {}
}
