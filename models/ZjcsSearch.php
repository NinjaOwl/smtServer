<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zjcs;

/**
 * ZjcsSearch represents the model behind the search form about `app\models\Zjcs`.
 */
class ZjcsSearch extends Zjcs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'monitors', 'extinguishers', 'memberno'], 'integer'],
            [['palcename', 'religion','partymember', 'leader', 'idcard', 'tel', 'partytime', 'community', 'liaison', 'liaisontel', 'certificatenumber', 'people', 'placearea', 'buildarea', 'photo', 'remark'], 'safe'],
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
        $query = Zjcs::find();

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
            'partytime' => $this->partytime,
            'monitors' => $this->monitors,
            'extinguishers' => $this->extinguishers,
            'memberno' => $this->memberno,
        ]);

        if(!$this->isEmpty($params)){
            foreach ($params as $name => $value) {
                if(!$this->isEmpty($value["partymember"])){
                    $pm =  $str = explode('-' , $value["partymember"]);
                    if(sizeof($pm) == 1){
                        $query->andFilterWhere(['partymember' => $this->partymember]);
                    }else{
                        $query->andFilterWhere(['>=', 'partymember', $pm[0]]);
                        if(!$this->isEmpty($pm[1])){
                            $query->andFilterWhere(['<=', 'partymember', $pm[1]]);
                        }
                    }
                }
            }
        }
        $query->andFilterWhere(['like', 'palcename', $this->palcename])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'leader', $this->leader])
            ->andFilterWhere(['like', 'idcard', $this->idcard])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'liaison', $this->liaison])
            ->andFilterWhere(['like', 'liaisontel', $this->liaisontel])
            ->andFilterWhere(['like', 'certificatenumber', $this->certificatenumber])
            ->andFilterWhere(['like', 'people', $this->people])
            ->andFilterWhere(['like', 'placearea', $this->placearea])
            ->andFilterWhere(['like', 'buildarea', $this->buildarea])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }

    protected function isEmpty($value)
    {
        return $value === '' || $value === [] || $value === null || is_string($value) && trim($value) === '';
    }
}
