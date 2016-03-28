<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trayectoria".
 *
 * @property integer $id
 * @property integer $idalumno
 * @property integer $iddivision
 * @property integer $idciclo
 */
class Trayectoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trayectoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno', 'iddivision', 'idciclo'], 'integer'],
            [['idalumno', 'iddivision', 'idciclo'], 'unique', 'targetAttribute' => ['idalumno', 'iddivision', 'idciclo'], 'message' => 'The combination of Idalumno, Iddivision and Idciclo has already been taken.'],
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
            'iddivision' => 'Iddivision',
            'idciclo' => 'Idciclo',
        ];
    }
}
