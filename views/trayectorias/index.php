<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrayectoriasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trayectorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trayectorias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trayectorias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idalumno',
            'iddivision',
            'idciclo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
