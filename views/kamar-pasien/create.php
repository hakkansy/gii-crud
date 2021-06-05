<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KamarPasien */

$this->title = 'Create Kamar Pasien';
$this->params['breadcrumbs'][] = ['label' => 'Kamar Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kamar-pasien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
