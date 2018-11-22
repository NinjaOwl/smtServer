<?php

use yii\helpers\Html;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Resources */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="resources-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'desc')->textInput(['maxlength' => true]) ?>
     <input type="file" name="files" id="files"/>
    <div style="display: none;">
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'thumb')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'suffix')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'size')->textInput() ?>
        <?= $form->field($model, 'times')->textInput() ?>
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'createTime')->textInput() ?>
        <?= $form->field($model, 'createUser')->textInput(['maxlength' => true]) ?>
    </div>
    <select name=textarea id="textarea" style="width: 300px; height: 80px"></select>
    <div class="form-group">
        <input type="button" id="button" onclick="start();" name="button" value="上传">
        <input type="hidden" id="uploadAuth" name="uploadAuth">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
\app\assets\AppAsset::addJs($this, 'js/alivod/lib/es6-promise.min.js');
\app\assets\AppAsset::addJs($this, 'js/alivod/lib/aliyun-oss-sdk-5.2.0.min.js');
\app\assets\AppAsset::addJs($this, 'js/alivod/aliyun-upload-sdk-1.4.0.min.js');
\app\assets\AppAsset::addJs($this, 'js/alivod/upload.js');
?>