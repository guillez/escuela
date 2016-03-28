<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asistencias".
 *
 * @property integer $id
 * @property integer $idalumno
 * @property integer $idciclo
 * @property integer $mes
 * @property double $d1
 * @property double $d2
 * @property double $d3
 * @property double $d4
 * @property double $d5
 * @property double $d6
 * @property double $d7
 * @property double $d8
 * @property double $d9
 * @property double $d10
 * @property double $d11
 * @property double $d12
 * @property double $d13
 * @property double $d14
 * @property double $d15
 * @property double $d16
 * @property double $d17
 * @property double $d18
 * @property double $d19
 * @property double $d20
 * @property double $d21
 * @property double $d22
 * @property double $d23
 * @property double $d24
 * @property double $d25
 * @property double $d26
 * @property double $d27
 * @property double $d28
 * @property double $d29
 * @property double $d30
 * @property double $d31
 * @property double $total
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
            [['idalumno', 'idciclo', 'mes'], 'integer'],
            [['d1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16', 'd17', 'd18', 'd19', 'd20', 'd21', 'd22', 'd23', 'd24', 'd25', 'd26', 'd27', 'd28', 'd29', 'd30', 'd31', 'total'], 'number'],
            [['idalumno', 'idciclo', 'mes'], 'unique', 'targetAttribute' => ['idalumno', 'idciclo', 'mes'], 'message' => 'The combination of Idalumno, Idciclo and Mes has already been taken.'],
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
            'idciclo' => 'Idciclo',
            'mes' => 'Mes',
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
