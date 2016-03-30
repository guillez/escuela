<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EstadosAlumno */
/* @var $form ActiveForm */
?>
<div class="estados_alumno">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'descripcion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- estados_alumno -->
