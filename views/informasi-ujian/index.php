<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informasi Ujians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informasi-ujian-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Informasi Ujian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nomor_pendaftaran',
            'nama',
            'kota_ujian',
            'lokasi_ujian',
            'id_sekolah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
