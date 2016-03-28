<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Designaciones */
/* @var $form ActiveForm */
?>
<div class="designaciones">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idmateria') ?>
        <?= $form->field($model, 'idprofesor') ?>
        <?= $form->field($model, 'idestado') ?>
        <?= $form->field($model, 'iddivision') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- designaciones -->
