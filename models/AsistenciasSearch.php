<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asistencias;

/**
 * AsistenciasSearch represents the model behind the search form about `app\models\Asistencias`.
 */
class AsistenciasSearch extends Asistencias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idalumno', 'idciclo', 'mes'], 'integer'],
            [['d1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16', 'd17', 'd18', 'd19', 'd20', 'd21', 'd22', 'd23', 'd24', 'd25', 'd26', 'd27', 'd28', 'd29', 'd30', 'd31', 'total'], 'number'],
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
        $query = Asistencias::find();

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
            'idciclo' => $this->idciclo,
            'mes' => $this->mes,
            'd1' => $this->d1,
            'd2' => $this->d2,
            'd3' => $this->d3,
            'd4' => $this->d4,
            'd5' => $this->d5,
            'd6' => $this->d6,
            'd7' => $this->d7,
            'd8' => $this->d8,
            'd9' => $this->d9,
            'd10' => $this->d10,
            'd11' => $this->d11,
            'd12' => $this->d12,
            'd13' => $this->d13,
            'd14' => $this->d14,
            'd15' => $this->d15,
            'd16' => $this->d16,
            'd17' => $this->d17,
            'd18' => $this->d18,
            'd19' => $this->d19,
            'd20' => $this->d20,
            'd21' => $this->d21,
            'd22' => $this->d22,
            'd23' => $this->d23,
            'd24' => $this->d24,
            'd25' => $this->d25,
            'd26' => $this->d26,
            'd27' => $this->d27,
            'd28' => $this->d28,
            'd29' => $this->d29,
            'd30' => $this->d30,
            'd31' => $this->d31,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
