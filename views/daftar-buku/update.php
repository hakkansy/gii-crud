<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DaftarBuku */

$this->title = 'Update Daftar Buku: ' . $model->buku_id;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->buku_id, 'url' => ['view', 'id' => $model->buku_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftar-buku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
