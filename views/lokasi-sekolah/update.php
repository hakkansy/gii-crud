<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LokasiSekolah */

$this->title = 'Update Lokasi Sekolah: ' . $model->id_sekolah;
$this->params['breadcrumbs'][] = ['label' => 'Lokasi Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sekolah, 'url' => ['view', 'id' => $model->id_sekolah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lokasi-sekolah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
