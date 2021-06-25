<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banyak Prodis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banyak-prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Banyak Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_jurusan',
            'prodi',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
