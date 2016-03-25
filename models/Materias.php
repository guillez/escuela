<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materias".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $curso
 * @property integer $orden
 */
class Materias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['curso', 'orden'], 'integer'],
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
            'curso' => 'Curso',
            'orden' => 'Orden',
        ];
    }
}
