<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shdy;

/**
 * ShdySearch represents the model behind the search form about `app\models\Shdy`.
 */
class ShdySearch extends Shdy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'category'], 'integer'],
            [['name', 'nation', 'idcard', 'birthday', 'education', 'partytime', 'formalpartytime', 'tel', 'addr'], 'safe'],
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
        $query = Shdy::find();

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
            'gender' => $this->gender,
            'birthday' => $this->birthday,
            'category' => $this->category,
            'partytime' => $this->partytime,
            'formalpartytime' => $this->formalpartytime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'addr', $this->addr]);

        return $dataProvider;
    }
}
