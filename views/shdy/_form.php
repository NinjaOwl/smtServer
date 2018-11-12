<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shdy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shdy-form">
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">党员信息</div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>
            <div class="form-group field-shdy-nation">
                <label class="control-label" for="shdy-nation">民族</label>
                <?php
                $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_MZ);
                echo AutoComplete::widget([
                    'name' => 'nation_name',
                    'value'=>\app\tools\OutFormat::formatDict($model->nation, \app\tools\Constants::DICT_CONTENT_MZ),
                    'id' => 'nation_name',
                    'options' => ['class' => 'form-control autoC'],
                    'clientOptions' => [
                        'source' => $data,
                        'autoFill' => true,
                        'minLength' => 0,
                        'select' => new JsExpression("function( event, ui ) {
                $('#shdy-nation').val(ui.item.id);
            }"),
                        'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                    ]
                ]);
                ?>
                <div class="help-block"></div>
            </div>
            <?= Html::activeHiddenInput($model, 'nation') ?>

            <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => '选择出生年月.'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]); ?>

            <div class="form-group field-shdy-education">
                <label class="control-label" for="shdy-education">学历</label>
                <?php
                $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_XL);
                echo AutoComplete::widget([
                    'name' => 'education_name',
                    'id' => 'education_name',
                    'value'=>\app\tools\OutFormat::formatDict($model->education, \app\tools\Constants::DICT_CONTENT_XL),
                    'options' => ['class' => 'form-control autoC'],
                    'clientOptions' => [
                        'source' => $data,
                        'autoFill' => true,
                        'minLength' => 0,
                        'select' => new JsExpression("function( event, ui ) {
                $('#shdy-education').val(ui.item.id);
            }"),
                        'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                    ]
                ]);
                ?>
                <div class="help-block"></div>
            </div>
            <?= Html::activeHiddenInput($model, 'education') ?>

            <?= $form->field($model, 'category')->radioList(\app\tools\CommonFunc::getDyTypeList()) ?>

            <?= $form->field($model, 'partytime')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => '选择入党时间.'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]); ?>

            <?= $form->field($model, 'formalpartytime')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => '选择转正时间.'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd',
                ]
            ]); ?>

            <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php $this->beginBlock('script') ?>
$(function(){
$(".autoC").focus(function(){
$(this).autocomplete("search");
})
});

<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['script'], \yii\web\View::POS_END); ?>
