<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compras;


/**
 * ComprasSearch represents the model behind the search form about `app\models\Compras`.
 */
class ComprasSearch extends Compras
{

 // $public $rango_fecha;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idproveedor', 'pagado'], 'integer'],
            [['descripcion', 'fecha_factura', 'fecha_recepcion', 'imputacion_compra', 'comprobante', 'modo_pago'], 'safe'],
            [['importe'], 'number'],
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
        $query = Compras::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'idproveedor' => $this->idproveedor,
            'fecha_factura' => $this->fecha_factura,
            'importe' => $this->importe,
            'fecha_recepcion' => $this->fecha_recepcion,
            'pagado' => $this->pagado,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'imputacion_compra', $this->imputacion_compra])
            ->andFilterWhere(['like', 'comprobante', $this->comprobante])
            ->andFilterWhere(['like', 'modo_pago', $this->modo_pago]);

        return $dataProvider;
    }
}
