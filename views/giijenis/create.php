<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Giijenis */

$this->title = 'Create Giijenis';
$this->params['breadcrumbs'][] = ['label' => 'Giijenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giijenis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
