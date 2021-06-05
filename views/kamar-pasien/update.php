<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KamarPasien */

$this->title = 'Update Kamar Pasien: ' . $model->id_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Kamar Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kamar, 'url' => ['view', 'id' => $model->id_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamar-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
