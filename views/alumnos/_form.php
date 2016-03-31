<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use app\models\EstadosAlumno;


/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>



	<?php echo $form->field($model,'fecha_nacimiento')->
		widget(DatePicker::className(),[
		    'dateFormat' => 'yyyy-MM-dd',
		    'clientOptions' => [
		        'yearRange' => '-15:-10',
		        'changeYear' => true],
			'options' => ['class' => 'form-control', 'style' => 'width:25%']
		]) ?>

    <?= $form->field($model, 'documento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuil')->textInput(['maxlength' => true]) ?>

 <?= $form->field($model, 'tecnico')->dropDownList(
        array('1'=>'No Posee Netbook',2 => 'En poder del Alumno',3 => 'Enviado a ST',4 => 'Para Envio a ST'),
        array('options' => array('1'=>array('selected'=>true)))

    ) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'ingreso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'idestado')->dropDownList(
        ArrayHelper::map(EstadosAlumno::find()->all(),'id','descripcion' )

    ) ?>



    <?= $form->field($model, 'mac')->textInput(['maxlength' => true]) ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

