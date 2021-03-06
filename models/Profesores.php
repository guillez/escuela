<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesores".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $fecha_nacimiento
 * @property string $documento
 * @property string $direccion
 * @property string $telefono
 * @property string $cuil
 * @property string $ingreso
 * @property string $email
 * @property integer $idestado
 * @property string $serial
 * @property string $mac
 * @property integer $tecnico
 * @property string $observaciones
 */
class Profesores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_nacimiento'], 'safe'],
            [['idestado', 'tecnico'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['documento'], 'string', 'max' => 15],
            [['direccion', 'telefono', 'cuil'], 'string', 'max' => 50],
            [['ingreso'], 'string', 'max' => 4],
            [['email'], 'string', 'max' => 80],
            [['serial', 'mac'], 'string', 'max' => 20],
            [['observaciones'], 'string', 'max' => 200],
            [['documento'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'documento' => 'Documento',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'cuil' => 'Cuil',
            'ingreso' => 'Ingreso',
            'email' => 'Email',
            'idestado' => 'Idestado',
            'serial' => 'Serial',
            'mac' => 'Mac',
            'tecnico' => 'Tecnico',
            'observaciones' => 'Observaciones',
        ];
    }
}
