<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banyak Mahasiswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banyak-mahasiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Banyak Mahasiswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'nomor_bp',
            'id_prodi',
            'id_jurusan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
