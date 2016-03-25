<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Divisiones */
/* @var $form ActiveForm */
?>
<div class="divisiones">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'idmateria') ?>
        <?= $form->field($model, 'idprofesor') ?>
        <?= $form->field($model, 'activo') ?>
        <?= $form->field($model, 'nombre') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- divisiones -->
