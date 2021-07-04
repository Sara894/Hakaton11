<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Count;

/**
 * CountSearch represents the model behind the search form of `backend\models\Count`.
 */
class CountSearch extends Count
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'date_ip', 'black_list_ip'], 'integer'],
            [['ip', 'str_url', 'comment'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Count::find();

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
            'date_ip' => $this->date_ip,
            'black_list_ip' => $this->black_list_ip,
        ]);

        $query->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'str_url', $this->str_url])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
