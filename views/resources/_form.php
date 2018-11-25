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

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'desc')->textarea(['maxlength' => true]) ?>
        <?php
        if ($model->isNewRecord) {
            ?>
            <?= $form->field($model, 'files')->fileInput([]) ?>

            <?php
        }
        ?>
        <div style="display: none;">
            <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'thumb')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'suffix')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'size')->textInput() ?>
            <?= $form->field($model, 'duration')->textInput() ?>
            <?= $form->field($model, 'convert_status')->textInput() ?>
            <?= $form->field($model, 'created_at')->textInput() ?>
            <?= $form->field($model, 'creator_id')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'third_resource_id')->textInput() ?>
            <?= $form->field($model, 'visit_num')->textInput() ?>
        </div>
        <div class="form-group">
            <select name=textarea id="textarea" style="width: 300px; height: 80px; display: none"></select>
            <?php
            if ($model->isNewRecord) {
                ?>
                <input type="hidden" id="uploadAuth" name="uploadAuth">
                <input type="button" id="uploadBtn"
                       class="btn btn-primary" onclick="start();"
                       name="button" value="上传文件">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'id' => 'submit', 'disabled'=>'true']) ?>

                <?php
            } else {
                ?>
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                <?php
            }
            ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
\app\assets\AppAsset::addJs($this, 'js/alivod/lib/es6-promise.min.js');
\app\assets\AppAsset::addJs($this, 'js/alivod/lib/aliyun-oss-sdk-5.2.0.min.js');
\app\assets\AppAsset::addJs($this, 'js/alivod/aliyun-upload-sdk-1.4.0.min.js');
\app\assets\AppAsset::addJs($this, 'js/alivod/upload.js');
?>