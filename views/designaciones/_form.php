<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use app\models\Materias;
use app\models\Divisiones;
use app\models\Profesores;

/* @var $this yii\web\View */
/* @var $model app\models\Designaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="designaciones-form">

    <?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'iddivision')->dropDownList(
        ArrayHelper::map(Divisiones::find()->all(),'id','nombre' )

    ) ?>

<?= $form->field($model, 'idmateria')->dropDownList(
        ArrayHelper::map(Materias::find()->all(),'id','nombre','curso' )

    ) ?>

<?= $form->field($model, 'idprofesor')->dropDownList(
        ArrayHelper::map(Profesores::find()->all(),'id','nombre')

    ) ?>


 <?= $form->field($model, 'idestado')->dropDownList(
        array('1'=>'Activo',2 => 'Licencia'),
        array('options' => array('1'=>array('selected'=>true)))

    ) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
