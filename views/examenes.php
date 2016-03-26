<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Examenes */
/* @var $form ActiveForm */
?>
<div class="examenes">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idalumno') ?>
        <?= $form->field($model, 'idmateria') ?>
        <?= $form->field($model, 'iddivision') ?>
        <?= $form->field($model, 'idprofesor') ?>
        <?= $form->field($model, 'idciclo') ?>
        <?= $form->field($model, 'primero') ?>
        <?= $form->field($model, 'segundo') ?>
        <?= $form->field($model, 'tercero') ?>
        <?= $form->field($model, 'promedio') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- examenes -->
