<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CiclosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ciclos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ciclos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ciclos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'descripcion',
 [
             'label'=>'Activo',
             'format'=>'raw',
             'value' => function($data){
                 $url = "true.gif";
		$url1 = "false.png";
                 if($data['activo']) { return Html::img($url,['alt'=>'yii']); } else {return Html::img($url1,['alt'=>'yii']);};
             }
],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
