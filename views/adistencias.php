<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asistencias */
/* @var $form ActiveForm */
?>
<div class="adistencias">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idalumno') ?>
        <?= $form->field($model, 'idmateria') ?>
        <?= $form->field($model, 'iddivision') ?>
        <?= $form->field($model, 'idciclo') ?>
        <?= $form->field($model, 'd1') ?>
        <?= $form->field($model, 'd2') ?>
        <?= $form->field($model, 'd3') ?>
        <?= $form->field($model, 'd4') ?>
        <?= $form->field($model, 'd5') ?>
        <?= $form->field($model, 'd6') ?>
        <?= $form->field($model, 'd7') ?>
        <?= $form->field($model, 'd8') ?>
        <?= $form->field($model, 'd9') ?>
        <?= $form->field($model, 'd10') ?>
        <?= $form->field($model, 'd11') ?>
        <?= $form->field($model, 'd12') ?>
        <?= $form->field($model, 'd13') ?>
        <?= $form->field($model, 'd14') ?>
        <?= $form->field($model, 'd15') ?>
        <?= $form->field($model, 'd16') ?>
        <?= $form->field($model, 'd17') ?>
        <?= $form->field($model, 'd18') ?>
        <?= $form->field($model, 'd19') ?>
        <?= $form->field($model, 'd20') ?>
        <?= $form->field($model, 'd21') ?>
        <?= $form->field($model, 'd22') ?>
        <?= $form->field($model, 'd23') ?>
        <?= $form->field($model, 'd24') ?>
        <?= $form->field($model, 'd25') ?>
        <?= $form->field($model, 'd26') ?>
        <?= $form->field($model, 'd27') ?>
        <?= $form->field($model, 'd28') ?>
        <?= $form->field($model, 'd29') ?>
        <?= $form->field($model, 'd30') ?>
        <?= $form->field($model, 'd31') ?>
        <?= $form->field($model, 'total') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- adistencias -->
