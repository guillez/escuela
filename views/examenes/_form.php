<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
use app\models\Materias;
use app\models\Divisiones;

/* @var $this yii\web\View */
/* @var $model app\models\Examenes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examenes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idalumno')->textInput() ?>


<?= $form->field($model, 'idmateria')->dropDownList(
        ArrayHelper::map(Materias::find()->all(),'id','nombre','curso' )

    ) ?>

<?= $form->field($model, 'iddivision')->dropDownList(
        ArrayHelper::map(Divisiones::find()->all(),'id','nombre' )

    ) ?>

    <?= $form->field($model, 'idprofesor')->textInput() ?>

    <?= $form->field($model, 'idciclo')->textInput() ?>

    <?= $form->field($model, 'primero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'segundo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tercero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promedio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
