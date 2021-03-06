<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feriado */

$this->title = 'Update Feriado: ' . $model->idferiado;
$this->params['breadcrumbs'][] = ['label' => 'Feriados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idferiado, 'url' => ['view', 'id' => $model->idferiado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feriado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
