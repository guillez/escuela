<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Asistencias;

$asistencias= new Asistencias();
/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       <?= Html::a('Asistencias', ['asistencias/index', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
       
<p>
<?php
/*
echo'<a href="./index.php/asistencias/veralumno/?id=1" 
            class="btn btn-primary">mylinktext</a>';
*/
?>
<p>

        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'fecha_nacimiento',
            'documento',
            'direccion',
            'telefono',
            'cuil',
            'ingreso',
            'email:email',
            'idestado',
            'serial',
            'mac',
            'tecnico',
            'observaciones',
        ],
    ]) ?>

</div>
