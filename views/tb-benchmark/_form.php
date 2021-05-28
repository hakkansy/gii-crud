<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbBenchmark */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-benchmark-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'framework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai')->textInput() ?>

    <?= $form->field($model, 'penggunaan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
