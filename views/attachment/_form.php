<?php

use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Attachment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="attachment-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc')->textarea(['maxlength' => true]) ?>
    <?php
    echo $form->field($model, 'urlUpload')->widget(
        '\trntv\filekit\widget\Upload',
        [
            'url' => ['upload'],
            'sortable' => true,
            'maxFileSize' => 30 * 1024 * 1024, // 10 MiB
            'maxNumberOfFiles' => 1,
            'clientOptions' => ['done' => new JsExpression("function(e, data) {
                        }"),]
        ]
    );
    ?>
    <div style="display:none">
        <?= $form->field($model, 'rid')->hiddenInput() ?>
    <?= $form->field($model, 'suffix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'creator_id')->textInput() ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
