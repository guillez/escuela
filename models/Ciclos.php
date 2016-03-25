<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciclos".
 *
 * @property integer $id
 * @property string $descripcion
 * @property integer $activo
 */
class Ciclos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ciclos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activo'], 'integer'],
            [['descripcion'], 'string', 'max' => 4],
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
            'activo' => 'Activo',
        ];
    }
}
