<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamenesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Examenes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examenes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Examenes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idalumno',
            'idmateria',
            'iddivision',
            'idprofesor',
            // 'idciclo',
            // 'primero',
            // 'segundo',
            // 'tercero',
            // 'promedio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
