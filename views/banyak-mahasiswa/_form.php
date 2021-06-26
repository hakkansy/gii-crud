<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\BanyakProdi;
use app\models\Jurusan;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;
/* @var $this yii\web\View */
/* @var $model app\models\BanyakMahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banyak-mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_bp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jurusan')->dropDownList(Jurusan::getJurusan(),
    	['id'=>'jurusan','prompt'=>'Select Jurusan...']) 
    ?>

    <?= $form->field($model, 'id_prodi')->widget(DepDrop::classname(),[
    	'data'=>BanyakProdi::getBanyakProdiList($model->id_jurusan,$model->nomor_bp),
    	'options'=>['id'=>'prodi','prompt'=>'Select Prodi...'],
    	'pluginOptions'=>[
    		'depends'=> ['jurusan'],
    		'placeholder'=>'Select Prodi...',
    		'url'=>Url::to(['banyak-mahasiswa/subcat'])
    	]
    ])
 ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
