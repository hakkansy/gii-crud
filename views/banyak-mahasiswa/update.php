<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BanyakMahasiswa */

$this->title = 'Update Banyak Mahasiswa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Banyak Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banyak-mahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
