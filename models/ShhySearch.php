<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shhy;

/**
 * ShhySearch represents the model behind the search form about `app\models\Shhy`.
 */
class ShhySearch extends Shhy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'shid', 'e_employeno', 'isestablishparty', 'partymemberno'], 'integer'],
            [['name', 'birthday', 'nation', 'region', 'party', 'education', 'degree', 'title', 'idcard', 'company', 'duties', 'addr', 'tel', 'wxid', 'email', 'shtime', 'majorduties', 'majorhonors', 'resume', 'e_name', 'e_legalrepre', 'e_registrationaddr', 'e_establishdate', 'e_registno', 'e_industry', 'e_addr', 'e_contactname', 'e_contactduties', 'e_contactemail', 'e_contacttel', 'e_contactfax'], 'safe'],
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
        $query = Shhy::find();

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
            'shid' => $this->shid,
            'shtime' => $this->shtime,
            'e_establishdate' => $this->e_establishdate,
            'e_employeno' => $this->e_employeno,
            'isestablishparty' => $this->isestablishparty,
            'partymemberno' => $this->partymemberno,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nation', $this->nation])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'party', $this->party])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'duties', $this->duties])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'wxid', $this->wxid])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'majorduties', $this->majorduties])
            ->andFilterWhere(['like', 'majorhonors', $this->majorhonors])
            ->andFilterWhere(['like', 'resume', $this->resume])
            ->andFilterWhere(['like', 'e_name', $this->e_name])
            ->andFilterWhere(['like', 'e_legalrepre', $this->e_legalrepre])
            ->andFilterWhere(['like', 'e_registrationaddr', $this->e_registrationaddr])
            ->andFilterWhere(['like', 'e_registno', $this->e_registno])
            ->andFilterWhere(['like', 'e_industry', $this->e_industry])
            ->andFilterWhere(['like', 'e_addr', $this->e_addr])
            ->andFilterWhere(['like', 'e_contactname', $this->e_contactname])
            ->andFilterWhere(['like', 'e_contactduties', $this->e_contactduties])
            ->andFilterWhere(['like', 'e_contactemail', $this->e_contactemail])
            ->andFilterWhere(['like', 'e_contacttel', $this->e_contacttel])
            ->andFilterWhere(['like', 'e_contactfax', $this->e_contactfax]);

        return $dataProvider;
    }
}
