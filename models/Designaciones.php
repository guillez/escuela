<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "designaciones".
 *
 * @property integer $id
 * @property string $iddivision
 * @property integer $idmateria
 * @property integer $idprofesor
 * @property integer $idestado
 */
class Designaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'designaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmateria', 'idprofesor', 'idestado'], 'integer'],
            [['iddivision'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'iddivision' => 'Iddivision',
            'idmateria' => 'Idmateria',
            'idprofesor' => 'Idprofesor',
            'idestado' => 'Idestado',
        ];
    }
}
