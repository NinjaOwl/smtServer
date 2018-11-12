<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dwrs;

/**
 * DwrsSearch represents the model behind the search form about `app\models\Dwrs`.
 */
class DwrsSearch extends Dwrs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'isCPPCC', 'isNPC'], 'integer'],
            [['name', 'birthday', 'nation', 'education', 'region', 'party', 'company', 'duties', 'tel', 'community', 'remark'], 'safe'],
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
        $query = Dwrs::find();

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
            'isCPPCC' => $this->isCPPCC,
            'isNPC' => $this->isNPC,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'party', $this->party])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'duties', $this->duties])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
