<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Version */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="version-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'version_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version_content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'download_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_lateast')->textInput() ?>

    <?= $form->field($model, 'is_force')->textInput() ?>

    <?= $form->field($model, 'release_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
