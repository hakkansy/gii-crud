<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BanyakProdi */

$this->title = 'Create Banyak Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Banyak Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banyak-prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
