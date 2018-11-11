<?php

use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zjcs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zjcs-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">基础信息</div>
        <div class="panel-body">


            <?php
            echo $form->field($model, 'photoUpload')->widget(
                '\trntv\filekit\widget\Upload',
                [
                    'url' => ['upload'],
                    'sortable' => true,
                    'maxFileSize' => 10 * 1024 * 1024, // 10 MiB
                    'maxNumberOfFiles' => 1,
                    'clientOptions' => ['done' => new JsExpression("function(e, data) {

                        }"),]
                ]
            );
            ?>
            <?= $form->field($model, 'palcename')->textInput(['maxlength' => true]) ?>

            <div class="form-group field-zjcs-religion">
                <label class="control-label" for="zjcs-religion">教别</label>
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
                $('#zjcs-religion').val(ui.item.id);
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

            <?= $form->field($model, 'leader')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>

            <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'partytime')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'partymember')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">社区联络信息</div>
        <div class="panel-body">
            <div class="form-group field-zjcs-community">
                <label class="control-label" for="zjcs-community">所属社区</label>
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
                $('#zjcs-community').val(ui.item.id);
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

            <?= $form->field($model, 'liaison')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'liaisontel')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">场地及相关配套信息</div>
        <div class="panel-body">

            <?= $form->field($model, 'certificatenumber')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'placearea')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'buildarea')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'memberno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'monitors')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'extinguishers')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'people')->textInput(['maxlength' => true]) ?>


            <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>



        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
<?php $this->beginBlock('script') ?>
$(function(){
$(".autoC").focus(function(){
$(this).autocomplete("search");
})
});

<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['script'], \yii\web\View::POS_END); ?>
