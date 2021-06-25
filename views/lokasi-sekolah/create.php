<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LokasiSekolah */

$this->title = 'Create Lokasi Sekolah';
$this->params['breadcrumbs'][] = ['label' => 'Lokasi Sekolahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-sekolah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
