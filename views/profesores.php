<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesores */
/* @var $form ActiveForm */
?>
<div class="profesores">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'apellido') ?>
        <?= $form->field($model, 'fecha_nacimiento') ?>
        <?= $form->field($model, 'idestado') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'documento') ?>
        <?= $form->field($model, 'direccion') ?>
        <?= $form->field($model, 'telefono') ?>
        <?= $form->field($model, 'cuil') ?>
        <?= $form->field($model, 'ingreso') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'observaciones') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- profesores -->
