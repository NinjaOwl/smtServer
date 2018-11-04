<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Xjcrs;

/**
 * XjcrsSearch represents the model behind the search form about `app\models\Xjcrs`.
 */
class XjcrsSearch extends Xjcrs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'isCPPCC', 'isNPC'], 'integer'],
            [['name', 'nation', 'region', 'birthday', 'penname', 'education', 'degree', 'place', 'party', 'title', 'idcard', 'company', 'duties', 'group', 'addr', 'tel', 'email', 'avatar', 'detail', 'resume'], 'safe'],
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
        $query = Xjcrs::find();

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
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'penname', $this->penname])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'place', $this->place])
            ->andFilterWhere(['like', 'party', $this->party])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'duties', $this->duties])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'resume', $this->resume]);

        return $dataProvider;
    }
}
