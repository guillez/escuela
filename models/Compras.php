<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compras".
 *
 * @property integer $id
 * @property integer $idproveedor
 * @property string $descripcion
 * @property string $fecha_factura
 * @property double $importe
 * @property string $fecha_recepcion
 * @property string $imputacion_compra
 * @property string $comprobante
 * @property integer $pagado
 * @property string $modo_pago
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idproveedor', 'descripcion'], 'required'],
            [['idproveedor', 'pagado'], 'integer'],
            [['fecha_factura', 'fecha_recepcion'], 'date', 'format'=>'php:Y-m-d'],

            [['importe'], 'number'],
            [['descripcion', 'imputacion_compra', 'modo_pago'], 'string', 'max' => 200],
            [['comprobante'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idproveedor' => 'Proveedor',
            'descripcion' => 'Descripcion',
            'fecha_factura' => 'Fecha Factura',
            'importe' => 'Importe',
            'fecha_recepcion' => 'Fecha Recepcion',
            'imputacion_compra' => 'Imputacion Compra',
            'comprobante' => 'Comprobante',
            'pagado' => 'Pagado',
            'modo_pago' => 'Modo Pago',
        ];
    }

    public function getProveedor()
    {
		
        return $this->hasMany(Proveedores::className(),['id'=>'idproveedor'] );
    }


}
