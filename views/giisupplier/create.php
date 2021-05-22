<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Giisupplier */

$this->title = 'Create Giisupplier';
$this->params['breadcrumbs'][] = ['label' => 'Giisuppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giisupplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
