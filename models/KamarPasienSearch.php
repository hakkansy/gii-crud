<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KamarPasien;

/**
 * KamarPasienSearch represents the model behind the search form of `app\models\KamarPasien`.
 */
class KamarPasienSearch extends KamarPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kamar', 'tipe_kamar'], 'safe'],
            [['lantai'], 'integer'],
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
        $query = KamarPasien::find();

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
            'lantai' => $this->lantai,
        ]);

        $query->andFilterWhere(['like', 'id_kamar', $this->id_kamar])
            ->andFilterWhere(['like', 'tipe_kamar', $this->tipe_kamar]);

        return $dataProvider;
    }
}
