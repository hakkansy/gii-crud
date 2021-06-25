<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InformasiUjian */

$this->title = 'Update Informasi Ujian: ' . $model->nomor_pendaftaran;
$this->params['breadcrumbs'][] = ['label' => 'Informasi Ujians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomor_pendaftaran, 'url' => ['view', 'id' => $model->nomor_pendaftaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="informasi-ujian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
