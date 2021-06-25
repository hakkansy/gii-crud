<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jurusans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jurusan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'KodeJurusan',
            'NamaJurusan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
