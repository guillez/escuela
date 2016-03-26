<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property integer $id
 * @property string $apellido
 * @property string $nombre
 * @property string $fecha_nacimiento
 * @property string $documento
 * @property string $direccion
 * @property string $telefono
 * @property string $cuil
 * @property string $ingreso
 * @property string $email
 * @property integer $idestado
 * @property string $observaciones
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['apellido'], 'required'],
            [['fecha_nacimiento'], 'safe'],
            [['idestado'], 'integer'],
            [['apellido', 'nombre'], 'string', 'max' => 100],
            [['documento'], 'string', 'max' => 15],
            [['direccion', 'telefono', 'cuil'], 'string', 'max' => 50],
            [['ingreso'], 'string', 'max' => 4],
            [['email'], 'string', 'max' => 80],
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
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'documento' => 'Documento',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'cuil' => 'Cuil',
            'ingreso' => 'Ingreso',
            'email' => 'Email',
            'idestado' => 'Idestado',
            'observaciones' => 'Observaciones',
        ];
    }
}
