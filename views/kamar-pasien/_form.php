<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KamarPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kamar-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lantai')->dropDownList(
            ['1' => 'Satu', '2' => 'Dua', '3' => 'Tiga','4'=>'Empat','5'=>'Lima']
            )?>

    <?= $form->field($model, 'tipe_kamar')->radioList(['Reguler'=> 'Reguler','VIP'=>'VIP']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
