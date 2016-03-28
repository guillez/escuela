<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DesignacionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Designaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designaciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Designaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'iddivision',
            'idmateria',
            'idprofesor',
            'idestado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
