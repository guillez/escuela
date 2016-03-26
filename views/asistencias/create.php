<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asistencias */

$this->title = 'Create Asistencias';
$this->params['breadcrumbs'][] = ['label' => 'Asistencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asistencias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
