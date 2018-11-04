<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jzry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jzry-form">
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">教职人员信息</div>
        <div class="panel-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>

    <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => '选择出生日期 ...'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]); ?>

            <div class="form-group field-jzry-nation">
                <label class="control-label" for="jzry-nation">民族</label>
                <?php
                $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_MZ);
                echo AutoComplete::widget([
                    'name' => 'nation_name',
                    'value' => \app\tools\OutFormat::formatDict($model->nation, \app\tools\Constants::DICT_CONTENT_MZ),
                    'id' => 'nation_name',
                    'options' => ['class' => 'form-control autoC'],
                    'clientOptions' => [
                        'source' => $data,
                        'autoFill' => true,
                        'minLength' => 0,
                        'select' => new JsExpression("function( event, ui ) {
                $('#jzry-nation').val(ui.item.id);
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

            <div class="form-group field-jzry-religion">
                <label class="control-label" for="jzry-religion">教别</label>
                <?php
                $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_JB);
                echo AutoComplete::widget([
                    'name' => 'religion_name',
                    'id' => 'religion_id',
                    'value' => \app\tools\OutFormat::formatDict($model->religion, \app\tools\Constants::DICT_CONTENT_JB),
                    'options' => ['class' => 'form-control autoC'],
                    'clientOptions' => [
                        'source' => $data,
                        'autoFill' => true,
                        'minLength' => 0,
                        'select' => new JsExpression("function( event, ui ) {
                $('#jzry-religion').val(ui.item.id);
            }"),
                        'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                    ]
                ]);
                ?>
                <div class="help-block"></div>
            </div>
            <?= Html::activeHiddenInput($model, 'religion') ?>

    <?= $form->field($model, 'faculty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificateno')->textInput(['maxlength' => true]) ?>

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
