<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lokasi Sekolahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-sekolah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lokasi Sekolah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sekolah',
            'nama_sekolah',
            'kota',
            'alamat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
