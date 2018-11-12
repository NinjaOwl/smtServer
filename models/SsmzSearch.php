<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ssmz;

/**
 * SsmzSearch represents the model behind the search form about `app\models\Ssmz`.
 */
class SsmzSearch extends Ssmz
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'ispoor', 'income'], 'integer'],
            [['name', 'birthday', 'nation','community', 'region', 'addr', 'company', 'tel', 'familydetail', 'poordetail', 'remark'], 'safe'],
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
        $query = Ssmz::find();

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
            'ispoor' => $this->ispoor,
            'income' => $this->income,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'familydetail', $this->familydetail])
            ->andFilterWhere(['like', 'poordetail', $this->poordetail])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
