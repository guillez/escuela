<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estados_alumno".
 *
 * @property integer $id
 * @property string $descripcion
 */
class EstadosAlumno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estados_alumno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
        ];
    }
}
