<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisiones".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $idmateria
 * @property integer $idprofesor
 * @property integer $activo
 */
class Divisiones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'divisiones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmateria', 'idprofesor', 'activo'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
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
            'idmateria' => 'Idmateria',
            'idprofesor' => 'Idprofesor',
            'activo' => 'Activo',
        ];
    }
}
