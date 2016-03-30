<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EstadosAlumno */

$this->title = 'Create Estados Alumno';
$this->params['breadcrumbs'][] = ['label' => 'Estados Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estados-alumno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
