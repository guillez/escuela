<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Designaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="designaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddivision')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idmateria')->textInput() ?>

    <?= $form->field($model, 'idprofesor')->textInput() ?>

    <?= $form->field($model, 'idestado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
