<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nyrbt;

/**
 * NyrbtSearch represents the model behind the search form about `app\models\Nyrbt`.
 */
class NyrbtSearch extends Nyrbt
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender'], 'integer'],
            [['name', 'nation', 'community', 'idcard', 'tel', 'workstatus', 'remark', 'year'], 'safe'],
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
        $query = Nyrbt::find();

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
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'workstatus', $this->workstatus])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
