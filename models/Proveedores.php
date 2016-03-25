<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property integer $id
 * @property string $identificacion
 * @property string $nombre
 * @property string $apellido
 * @property string $dni
 * @property string $cuil
 * @property string $email
 * @property string $direccion
 * @property string $telefonos
 *
 * @property Compras[] $compras
 */
class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identificacion'], 'required'],
            [['identificacion', 'nombre', 'apellido', 'dni', 'cuil'], 'string', 'max' => 50],
            [['email', 'direccion'], 'string', 'max' => 80],
            [['telefonos'], 'string', 'max' => 200],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identificacion' => 'Identificacion',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'dni' => 'Dni',
            'cuil' => 'Cuil',
            'email' => 'Email',
            'direccion' => 'Direccion',
            'telefonos' => 'Telefonos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompras()
    {
        return $this->hasMany(Compras::className(), ['idproveedor' => 'id']);
    }
}
