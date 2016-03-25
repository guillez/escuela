<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Proveedores;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idproveedor')->dropDownList(
		ArrayHelper::map(Proveedores::find()->all(),'id','identificacion' )

	) ?>





    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

  
	<?php echo $form->field($model,'fecha_factura')->
		widget(DatePicker::className(),[
		    'dateFormat' => 'yyyy-MM-dd',
		    'clientOptions' => [
		        'yearRange' => '-1:+1',
		        'changeYear' => true],
			'options' => ['class' => 'form-control', 'style' => 'width:25%']
		]) ?>

    <?= $form->field($model, 'importe')->textInput() ?>

	<?php echo $form->field($model,'fecha_recepcion')->
		widget(DatePicker::className(),[
		    'dateFormat' => 'yyyy-MM-dd',
		    'clientOptions' => [
		        'yearRange' => '-1:+1',
		        'changeYear' => true],
			'options' => ['class' => 'form-control', 'style' => 'width:25%']
		]) ?>

    <?= $form->field($model, 'imputacion_compra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comprobante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pagado')->textInput() ?>

    <?= $form->field($model, 'modo_pago')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
