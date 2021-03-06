<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
 'brandLabel' => Html::img('@web/educacion_logo.png', ['alt'=>Yii::$app->name]),

        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


if(Yii::$app->user->isGuest) {
              echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Ingresar', 'url' => ['/site/login']],

                ],
              ]);
            } else {







   echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
[ 
           'label' => 'General',
           'items' => [
                ['label' => 'Ciclos Lectivos', 'url' => ['/ciclos']],
                ['label' => 'Configuración de Materias', 'url' => ['/materias']],
                ['label' => 'Configuración de Divisiones', 'url' => ['/divisiones']],
                ['label' => 'Configuración de Estados Alumno', 'url' => ['/estados-alumno']],

            ],
        ],   
[
           'label' => 'Alumnos',
           'items' => [
                        ['label' => 'Gestión de Alumnos', 'url' => ['/alumnos']],
            		['label' => 'Gestión de Examenes', 'url' => ['/examenes']],
		        ['label' => 'Gestión de Asistencias', 'url' => ['/asistencias']],
		        ['label' => 'Trayectoria de Alumnos', 'url' => ['/trayectorias']],
            ],
        ],  
[
           'label' => 'Profesores',
           'items' => [
                        ['label' => 'Gestión de Profesores', 'url' => ['/profesores']],
            		['label' => 'Gestión de Designaciones', 'url' => ['/designaciones']],

            ],
        ],  


            
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);














/*
              echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [

            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Proveedores', 'url' => ['/proveedores']],
            ['label' => 'Compras', 'url' => ['/compras']],
            ['label' => 'Pagos', 'url' => ['/pagos']],
                  ['label' => 'Salir', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post'],],

                ],
              ]);
*/















            }

    NavBar::end();
    ?>

    <div class="container"> <br>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; De.Si.Em. (Desarrollo de Sistemas Empresariales) - <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
