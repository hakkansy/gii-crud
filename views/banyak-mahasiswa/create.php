<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BanyakMahasiswa */

$this->title = 'Create Banyak Mahasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Banyak Mahasiswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banyak-mahasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
