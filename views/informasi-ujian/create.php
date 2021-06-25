<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InformasiUjian */

$this->title = 'Create Informasi Ujian';
$this->params['breadcrumbs'][] = ['label' => 'Informasi Ujians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informasi-ujian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
