<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsistenciasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asistencias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idalumno') ?>

    <?= $form->field($model, 'idciclo') ?>

    <?= $form->field($model, 'mes') ?>

    <?= $form->field($model, 'd1') ?>

    <?php // echo $form->field($model, 'd2') ?>

    <?php // echo $form->field($model, 'd3') ?>

    <?php // echo $form->field($model, 'd4') ?>

    <?php // echo $form->field($model, 'd5') ?>

    <?php // echo $form->field($model, 'd6') ?>

    <?php // echo $form->field($model, 'd7') ?>

    <?php // echo $form->field($model, 'd8') ?>

    <?php // echo $form->field($model, 'd9') ?>

    <?php // echo $form->field($model, 'd10') ?>

    <?php // echo $form->field($model, 'd11') ?>

    <?php // echo $form->field($model, 'd12') ?>

    <?php // echo $form->field($model, 'd13') ?>

    <?php // echo $form->field($model, 'd14') ?>

    <?php // echo $form->field($model, 'd15') ?>

    <?php // echo $form->field($model, 'd16') ?>

    <?php // echo $form->field($model, 'd17') ?>

    <?php // echo $form->field($model, 'd18') ?>

    <?php // echo $form->field($model, 'd19') ?>

    <?php // echo $form->field($model, 'd20') ?>

    <?php // echo $form->field($model, 'd21') ?>

    <?php // echo $form->field($model, 'd22') ?>

    <?php // echo $form->field($model, 'd23') ?>

    <?php // echo $form->field($model, 'd24') ?>

    <?php // echo $form->field($model, 'd25') ?>

    <?php // echo $form->field($model, 'd26') ?>

    <?php // echo $form->field($model, 'd27') ?>

    <?php // echo $form->field($model, 'd28') ?>

    <?php // echo $form->field($model, 'd29') ?>

    <?php // echo $form->field($model, 'd30') ?>

    <?php // echo $form->field($model, 'd31') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
