<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TourHotel;

/**
 * TourHotelSearch represents the model behind the search form about `common\models\TourHotel`.
 */
class TourHotelSearch extends TourHotel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tourId', 'twoPax', 'threeFivePax', 'sixEightPax', 'ninePax', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['level'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TourHotel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tourId' => $this->tourId,
            'twoPax' => $this->twoPax,
            'threeFivePax' => $this->threeFivePax,
            'sixEightPax' => $this->sixEightPax,
            'ninePax' => $this->ninePax,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'level', $this->level]);

        return $dataProvider;
    }
}
