<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Trayectoria */
/* @var $form ActiveForm */
?>
<div class="trayectoria">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idalumno') ?>
        <?= $form->field($model, 'iddivision') ?>
        <?= $form->field($model, 'idciclo') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- trayectoria -->
