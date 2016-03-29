<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Designaciones */

$this->title = 'Create Designaciones';
$this->params['breadcrumbs'][] = ['label' => 'Designaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designaciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
