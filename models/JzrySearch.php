<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jzry;

/**
 * JzrySearch represents the model behind the search form about `app\models\Jzry`.
 */
class JzrySearch extends Jzry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender'], 'integer'],
            [['name', 'alias', 'birthday', 'nation', 'religion', 'faculty', 'idcard', 'addr', 'residence', 'tel', 'certificateno'], 'safe'],
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
        $query = Jzry::find();

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
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'faculty', $this->faculty])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'residence', $this->residence])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'certificateno', $this->certificateno]);

        return $dataProvider;
    }
}
