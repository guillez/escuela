<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Examenes */

$this->title = 'Create Examenes';
$this->params['breadcrumbs'][] = ['label' => 'Examenes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examenes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
