<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Version;

/**
 * VersionSearch represents the model behind the search form about `app\models\Version`.
 */
class VersionSearch extends Version
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_lateast', 'is_force', 'release_time'], 'integer'],
            [['version_code', 'version_content', 'download_url'], 'safe'],
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
        $query = Version::find();

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
            'is_lateast' => $this->is_lateast,
            'is_force' => $this->is_force,
            'release_time' => $this->release_time,
        ]);

        $query->andFilterWhere(['like', 'version_code', $this->version_code])
            ->andFilterWhere(['like', 'version_content', $this->version_content])
            ->andFilterWhere(['like', 'download_url', $this->download_url]);

        return $dataProvider;
    }
}
