<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Examenes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examenes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idalumno')->textInput() ?>

    <?= $form->field($model, 'idmateria')->textInput() ?>

    <?= $form->field($model, 'iddivision')->textInput() ?>

    <?= $form->field($model, 'idprofesor')->textInput() ?>

    <?= $form->field($model, 'idciclo')->textInput() ?>

    <?= $form->field($model, 'primero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'segundo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tercero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promedio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
