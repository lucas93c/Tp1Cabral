<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

<!-- Se oculta label y campo del formulario de authkey y accesstoken (siguen existiendo pero no aparecen) -->

    <?= $form->field($model, 'authkey', ['options' => ['style' => 'display:none;'], 'labelOptions' => ['style' => 'display:none;']])->textInput(['maxlength' => true, 'style' => 'display:none;']) ?>

    <?= $form->field($model, 'accesstoken', ['options' => ['style' => 'display:none;'], 'labelOptions' => ['style' => 'display:none;']])->textInput(['maxlength' => true, 'style' => 'display:none;']) ?>    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
