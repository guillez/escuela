<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Trayectorias */

$this->title = 'Create Trayectorias';
$this->params['breadcrumbs'][] = ['label' => 'Trayectorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trayectorias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
