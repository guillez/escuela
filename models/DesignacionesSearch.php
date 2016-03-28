<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Designaciones;

/**
 * DesignacionesSearch represents the model behind the search form about `app\models\Designaciones`.
 */
class DesignacionesSearch extends Designaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idmateria', 'idprofesor', 'idestado'], 'integer'],
            [['iddivision'], 'safe'],
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
        $query = Designaciones::find();

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
            'idmateria' => $this->idmateria,
            'idprofesor' => $this->idprofesor,
            'idestado' => $this->idestado,
        ]);

        $query->andFilterWhere(['like', 'iddivision', $this->iddivision]);

        return $dataProvider;
    }
}
