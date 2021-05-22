<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Giibarang */

$this->title = 'Create Giibarang';
$this->params['breadcrumbs'][] = ['label' => 'Giibarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giibarang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
