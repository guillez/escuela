<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfesoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profesores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profesores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'apellido',
            'nombre',
            'fecha_nacimiento',
            'documento',
            // 'direccion',
            // 'telefono',
            // 'cuil',
            // 'ingreso',
            // 'email:email',
            // 'idestado',
            // 'observaciones',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
