<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InformasiUjian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informasi-ujian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kota_ujian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi_ujian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_sekolah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
