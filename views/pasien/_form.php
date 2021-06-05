<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->radioList(['Laki-laki'=> 'Laki-laki','Perempuan'=>'Perempuan']) ?>

    <?php // $form->field($model, 'tanggal_lahir')->textInput() ?>
    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Masukkan tanggal lahir ...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format'=>'dd-MM-yyyy'
    ]
    ]);
     ?>

    <?= $form->field($model, 'agama')->dropDownList(
            ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katholik' => 'Katholik','Budha'=>'Budha','Hindu'=>'Hindu','Konghucu'=>'Konghucu']
            ) ?>
    <?php // $form->field($model, 'agama')->dropDownList(  ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katholik' => 'Katholik','Budha'=>'Budha','Hindu'=>'Hindu','Konghucu'=>'Konghucu']  ); ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
