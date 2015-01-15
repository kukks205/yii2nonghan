<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'prename')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'disease')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'reg_date')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'user')->textInput(['maxlength' => 200]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
