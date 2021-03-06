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

    <?= $form->field($model, 'idciclo')->textInput() ?>

    <?= $form->field($model, 'mes')->textInput() ?>

<table>
<tr>
<td>
    <?= $form->field($model, 'd1')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd2')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd3')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd4')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd5')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd6')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd7')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd8')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd9')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd10')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd11')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd12')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd13')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd14')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd15')->textInput() ?>
</td>
</tr>
</table>
<table>
<tr>
<td>
    <?= $form->field($model, 'd16')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd17')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd18')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd19')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd20')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd21')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd22')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd23')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd24')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd25')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd26')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd27')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd28')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd29')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd30')->textInput() ?>
</td>
<td>
    <?= $form->field($model, 'd31')->textInput() ?>
</td>
</tr>
</table>
    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
