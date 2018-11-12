<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nyrbt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nyrbt-form">

    <div class="panel panel-default panel-info">
        <div class="panel-heading ">牛羊肉补贴人员信息</div>
        <div class="panel-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>


            <div class="form-group field-nyrbt-nation">
                <label class="control-label" for="nyrbt-nation">民族</label>
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
                $('#nyrbt-nation').val(ui.item.id);
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

            <div class="form-group field-nyrbt-community">
                <label class="control-label" for="nyrbt-community">所属社区</label>
                <?php
                $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_SQ);
                echo AutoComplete::widget([
                    'name' => 'community_name',
                    'id' => 'community_name',
                    'value' => \app\tools\OutFormat::formatDict($model->community, \app\tools\Constants::DICT_CONTENT_SQ),
                    'options' => ['class' => 'form-control autoC'],
                    'clientOptions' => [
                        'source' => $data,
                        'autoFill' => true,
                        'minLength' => 0,
                        'select' => new JsExpression("function( event, ui ) {
                $('#nyrbt-community').val(ui.item.id);
            }"),
                        'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                    ]
                ]);
                ?>
                <div class="help-block"></div>
            </div>
            <?= Html::activeHiddenInput($model, 'community') ?>

    <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'year')->textInput() ?>

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
