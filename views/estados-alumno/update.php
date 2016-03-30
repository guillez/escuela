<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EstadosAlumno */

$this->title = 'Update Estados Alumno: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estados Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="estados-alumno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
