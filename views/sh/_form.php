<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nane')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_show')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
