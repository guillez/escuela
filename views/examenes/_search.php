<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamenesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examenes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idalumno') ?>

    <?= $form->field($model, 'idmateria') ?>

    <?= $form->field($model, 'iddivision') ?>

    <?= $form->field($model, 'idprofesor') ?>

    <?php // echo $form->field($model, 'idciclo') ?>

    <?php // echo $form->field($model, 'primero') ?>

    <?php // echo $form->field($model, 'segundo') ?>

    <?php // echo $form->field($model, 'tercero') ?>

    <?php // echo $form->field($model, 'promedio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
