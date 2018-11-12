<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sh;

/**
 * ShSearch represents the model behind the search form about `app\models\Sh`.
 */
class ShSearch extends Sh
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'e_show'], 'integer'],
            [['nane'], 'safe'],
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
        $query = Sh::find();

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
            'e_show' => $this->e_show,
        ]);

        $query->andFilterWhere(['like', 'nane', $this->nane]);

        return $dataProvider;
    }
}
