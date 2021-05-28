<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DaftarKategoriBuku */

$this->title = 'Create Daftar Kategori Buku';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Kategori Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-kategori-buku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
