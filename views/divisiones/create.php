<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Divisiones */

$this->title = 'Create Divisiones';
$this->params['breadcrumbs'][] = ['label' => 'Divisiones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="divisiones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
