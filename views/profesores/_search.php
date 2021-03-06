<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'fecha_nacimiento') ?>

    <?= $form->field($model, 'documento') ?>

    <?= $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'cuil') ?>

    <?php // echo $form->field($model, 'ingreso') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'idestado') ?>

    <?php // echo $form->field($model, 'serial') ?>

    <?php // echo $form->field($model, 'mac') ?>

    <?php // echo $form->field($model, 'tecnico') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
