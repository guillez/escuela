<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use app\models\Materias;
use app\models\Profesores;

/* @var $this yii\web\View */
/* @var $model app\models\Divisiones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="divisiones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'idmateria')->dropDownList(
        ArrayHelper::map(Materias::find()->all(),'id','nombre' )

    ) ?>
    <?php

$sql = 'SELECT *, concat(apellido,",",nombre) as nombrecompleto FROM profesores WHERE idestado=2';

echo $form->field($model, 'idprofesor')->dropDownList(ArrayHelper::map(Profesores::findBySql($sql)->all(),'id','nombrecompleto' ));

     ?>


     <?= $form->field($model, 'activo')->dropDownList(
        array(1=>'Activa',0 => 'No Activa'),
        array('options' => array(1=>array('selected'=>true)))

    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
