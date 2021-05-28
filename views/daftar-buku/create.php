<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DaftarBuku */

$this->title = 'Create Daftar Buku';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Bukus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-buku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
