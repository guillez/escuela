<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asistencias".
 *
 * @property integer $id
 * @property integer $idalumno
 * @property integer $idmateria
 * @property integer $iddivision
 * @property integer $idciclo
 * @property integer $d1
 * @property integer $d2
 * @property integer $d3
 * @property integer $d4
 * @property integer $d5
 * @property integer $d6
 * @property integer $d7
 * @property integer $d8
 * @property integer $d9
 * @property integer $d10
 * @property integer $d11
 * @property integer $d12
 * @property integer $d13
 * @property integer $d14
 * @property integer $d15
 * @property integer $d16
 * @property integer $d17
 * @property integer $d18
 * @property integer $d19
 * @property integer $d20
 * @property integer $d21
 * @property integer $d22
 * @property integer $d23
 * @property integer $d24
 * @property integer $d25
 * @property integer $d26
 * @property integer $d27
 * @property integer $d28
 * @property integer $d29
 * @property integer $d30
 * @property integer $d31
 * @property string $total
 */
class Asistencias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asistencias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idalumno', 'idmateria', 'iddivision', 'idciclo', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16', 'd17', 'd18', 'd19', 'd20', 'd21', 'd22', 'd23', 'd24', 'd25', 'd26', 'd27', 'd28', 'd29', 'd30', 'd31'], 'integer'],
            [['total'], 'number'],
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
            'idciclo' => 'Idciclo',
            'd1' => 'D1',
            'd2' => 'D2',
            'd3' => 'D3',
            'd4' => 'D4',
            'd5' => 'D5',
            'd6' => 'D6',
            'd7' => 'D7',
            'd8' => 'D8',
            'd9' => 'D9',
            'd10' => 'D10',
            'd11' => 'D11',
            'd12' => 'D12',
            'd13' => 'D13',
            'd14' => 'D14',
            'd15' => 'D15',
            'd16' => 'D16',
            'd17' => 'D17',
            'd18' => 'D18',
            'd19' => 'D19',
            'd20' => 'D20',
            'd21' => 'D21',
            'd22' => 'D22',
            'd23' => 'D23',
            'd24' => 'D24',
            'd25' => 'D25',
            'd26' => 'D26',
            'd27' => 'D27',
            'd28' => 'D28',
            'd29' => 'D29',
            'd30' => 'D30',
            'd31' => 'D31',
            'total' => 'Total',
        ];
    }
}
