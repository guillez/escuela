<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asistencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asistencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idalumno')->textInput() ?>

    <?= $form->field($model, 'idmateria')->textInput() ?>

    <?= $form->field($model, 'iddivision')->textInput() ?>

    <?= $form->field($model, 'idciclo')->textInput() ?>

    <?= $form->field($model, 'd1')->textInput() ?>

    <?= $form->field($model, 'd2')->textInput() ?>

    <?= $form->field($model, 'd3')->textInput() ?>

    <?= $form->field($model, 'd4')->textInput() ?>

    <?= $form->field($model, 'd5')->textInput() ?>

    <?= $form->field($model, 'd6')->textInput() ?>

    <?= $form->field($model, 'd7')->textInput() ?>

    <?= $form->field($model, 'd8')->textInput() ?>

    <?= $form->field($model, 'd9')->textInput() ?>

    <?= $form->field($model, 'd10')->textInput() ?>

    <?= $form->field($model, 'd11')->textInput() ?>

    <?= $form->field($model, 'd12')->textInput() ?>

    <?= $form->field($model, 'd13')->textInput() ?>

    <?= $form->field($model, 'd14')->textInput() ?>

    <?= $form->field($model, 'd15')->textInput() ?>

    <?= $form->field($model, 'd16')->textInput() ?>

    <?= $form->field($model, 'd17')->textInput() ?>

    <?= $form->field($model, 'd18')->textInput() ?>

    <?= $form->field($model, 'd19')->textInput() ?>

    <?= $form->field($model, 'd20')->textInput() ?>

    <?= $form->field($model, 'd21')->textInput() ?>

    <?= $form->field($model, 'd22')->textInput() ?>

    <?= $form->field($model, 'd23')->textInput() ?>

    <?= $form->field($model, 'd24')->textInput() ?>

    <?= $form->field($model, 'd25')->textInput() ?>

    <?= $form->field($model, 'd26')->textInput() ?>

    <?= $form->field($model, 'd27')->textInput() ?>

    <?= $form->field($model, 'd28')->textInput() ?>

    <?= $form->field($model, 'd29')->textInput() ?>

    <?= $form->field($model, 'd30')->textInput() ?>

    <?= $form->field($model, 'd31')->textInput() ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
