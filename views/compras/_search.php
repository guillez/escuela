<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\ComprasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idproveedor') ?>

    <?= $form->field($model, 'descripcion') ?>


<?php
echo $form->field($model, 'fecha_factura')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => ''],
    'pluginOptions' => [
        'id' => 'fecha1',
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd',
        'startView' => 'year',
    ]
]);
?>

    <?= $form->field($model, 'importe') ?>

    <?php // echo $form->field($model, 'fecha_recepcion') ?>

    <?php // echo $form->field($model, 'imputacion_compra') ?>

    <?php // echo $form->field($model, 'comprobante') ?>

    <?php // echo $form->field($model, 'pagado') ?>

    <?php // echo $form->field($model, 'modo_pago') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
