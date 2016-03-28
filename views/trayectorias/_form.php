<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Alumnos;
use app\models\Divisiones;
use app\models\Ciclos;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Trayectorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="trayectorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php

	$sql = 'SELECT * FROM alumnos WHERE idestado=2';

	echo $form->field($model, 'idalumno')->dropDownList(ArrayHelper::map(Alumnos::findBySql($sql)->all(),'id','nombre' ));

     ?>

    <?= $form->field($model, 'iddivision')->dropDownList(ArrayHelper::map(Divisiones::find()->all(),'id','nombre' )) ?>


    <?= $form->field($model, 'idciclo')->dropDownList(ArrayHelper::map(Ciclos::find()->all(),'id','descripcion' )) ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
