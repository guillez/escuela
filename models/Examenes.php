<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examenes".
 *
 * @property integer $id
 * @property integer $idalumno
 * @property integer $idmateria
 * @property integer $iddivision
 * @property integer $idprofesor
 * @property integer $idciclo
 * @property string $primero
 * @property string $segundo
 * @property string $tercero
 * @property string $promedio
 */
class Examenes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'examenes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno', 'idmateria', 'iddivision', 'idprofesor', 'idciclo'], 'integer'],
            [['primero', 'segundo', 'tercero', 'promedio'], 'number'],
            [['idalumno', 'idmateria', 'idciclo'], 'unique', 'targetAttribute' => ['idalumno', 'idmateria', 'idciclo'], 'message' => 'The combination of Idalumno, Idmateria and Idciclo has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idalumno' => 'Idalumno',
            'idmateria' => 'Idmateria',
            'iddivision' => 'Iddivision',
            'idprofesor' => 'Idprofesor',
            'idciclo' => 'Idciclo',
            'primero' => 'Primero',
            'segundo' => 'Segundo',
            'tercero' => 'Tercero',
            'promedio' => 'Promedio',
        ];
    }
}
