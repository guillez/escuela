<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ciclos */
/* @var $form ActiveForm */
?>
<div class="ciclos">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'activo') ?>
        <?= $form->field($model, 'descripcion') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ciclos -->
