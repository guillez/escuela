<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsistenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asistencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asistencias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asistencias', ['create'], ['class' => 'btn btn-success']) ?>
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
            'idciclo',
            // 'd1',
            // 'd2',
            // 'd3',
            // 'd4',
            // 'd5',
            // 'd6',
            // 'd7',
            // 'd8',
            // 'd9',
            // 'd10',
            // 'd11',
            // 'd12',
            // 'd13',
            // 'd14',
            // 'd15',
            // 'd16',
            // 'd17',
            // 'd18',
            // 'd19',
            // 'd20',
            // 'd21',
            // 'd22',
            // 'd23',
            // 'd24',
            // 'd25',
            // 'd26',
            // 'd27',
            // 'd28',
            // 'd29',
            // 'd30',
            // 'd31',
            // 'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
