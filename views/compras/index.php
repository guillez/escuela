<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Collapse;
use kartik\widgets\DatePicker;

//use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComprasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
<?php echo Collapse::widget([
    'items' => [
        [
            'label' => 'Buscar',
            'content' => $this->render('_search', ['model' => $searchModel]) ,
        ],
    ]
]);
?>
    <p>
        <?= Html::a('Create Compras', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'proveedor.identificacion',
            'descripcion',
            //'fecha_factura',

 [
            'attribute' => 'fecha_factura',
            'value' => 'fecha_factura',
            'format' => 'raw',
            'options' => ['style' => 'width: 20%;'],
            'filter' => DatePicker::widget([
                'model' => $searchModel,
                'attribute' => 'fecha_factura',
                'options' => ['placeholder' => ''],
                'pluginOptions' => [
                    'id' => 'fecha2',
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'startView' => 'year',
                ]
            ])
        ],



/*[
            'attribute' => 'rango_fecha',
            'value' => 'fecha',
            'format'=>'raw',
            'options' => ['style' => 'width: 25%;'],
            'filter' => DateRangePicker::widget([
                'model' => $searchModel,
                'attribute' => 'rango_fecha',
                'useWithAddon'=>false,
                'convertFormat'=>true,
                'pluginOptions'=>[
                    'locale'=>['format'=>'Y-m-d']
                ],
            ])
        ],*/
            'importe',
            // 'fecha_recepcion',
            // 'imputacion_compra',
            // 'comprobante',
            // 'pagado',
            // 'modo_pago',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
