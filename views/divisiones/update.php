<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Divisiones */

$this->title = 'Update Divisiones: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Divisiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="divisiones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
