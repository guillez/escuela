<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Examenes;

/**
 * ExamenesSearch represents the model behind the search form about `app\models\Examenes`.
 */
class ExamenesSearch extends Examenes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idalumno', 'idmateria', 'iddivision', 'idprofesor', 'idciclo'], 'integer'],
            [['primero', 'segundo', 'tercero', 'promedio'], 'number'],
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
        $query = Examenes::find();

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
            'idalumno' => $this->idalumno,
            'idmateria' => $this->idmateria,
            'iddivision' => $this->iddivision,
            'idprofesor' => $this->idprofesor,
            'idciclo' => $this->idciclo,
            'primero' => $this->primero,
            'segundo' => $this->segundo,
            'tercero' => $this->tercero,
            'promedio' => $this->promedio,
        ]);

        return $dataProvider;
    }
}
