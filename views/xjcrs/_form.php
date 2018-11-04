<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Xjcrs */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="xjcrs-form">
        <div class="panel panel-default panel-info">
            <div class="panel-heading ">新社会阶层人士信息</div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(); ?>
                <?php
                echo $form->field($model, 'avatarUpload')->widget(
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
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>

                <div class="form-group field-xjcrs-nation">
                    <label class="control-label" for="xjcrs-nation">民族</label>
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
                $('#xjcrs-nation').val(ui.item.id);
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

                <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => '选择出生年月.'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]); ?>

                <?= $form->field($model, 'penname')->textInput(['maxlength' => true]) ?>

                <div class="form-group field-xjcrs-education">
                    <label class="control-label" for="xjcrs-education">学历</label>
                    <?php
                    $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_XL);
                    echo AutoComplete::widget([
                        'name' => 'education_name',
                        'id' => 'education_name',
                        'value' => \app\tools\OutFormat::formatDict($model->education, \app\tools\Constants::DICT_CONTENT_XL),
                        'options' => ['class' => 'form-control autoC'],
                        'clientOptions' => [
                            'source' => $data,
                            'autoFill' => true,
                            'minLength' => 0,
                            'select' => new JsExpression("function( event, ui ) {
                $('#xjcrs-education').val(ui.item.id);
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

                <div class="form-group field-shhy-degree">
                    <label class="control-label" for="shhy-degree">学位</label>
                    <?php
                    $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_XW);
                    echo AutoComplete::widget([
                        'name' => 'degree_name',
                        'id' => 'degree_name',
                        'value' => \app\tools\OutFormat::formatDict($model->degree, \app\tools\Constants::DICT_CONTENT_XW),
                        'options' => ['class' => 'form-control autoC'],
                        'clientOptions' => [
                            'source' => $data,
                            'autoFill' => true,
                            'minLength' => 0,
                            'select' => new JsExpression("function( event, ui ) {
                $('#shhy-degree').val(ui.item.id);
            }"),
                            'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                        ]
                    ]);
                    ?>
                    <div class="help-block"></div>
                </div>
                <?= Html::activeHiddenInput($model, 'degree') ?>

                <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

                <div class="form-group field-xjcrs-party">
                    <label class="control-label" for="xjcrs-party">党派</label>
                    <?php
                    $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_DP);
                    echo AutoComplete::widget([
                        'name' => 'party_name',
                        'id' => 'party_name',
                        'value' => \app\tools\OutFormat::formatDict($model->party, \app\tools\Constants::DICT_CONTENT_DP),
                        'options' => ['class' => 'form-control autoC'],
                        'clientOptions' => [
                            'source' => $data,
                            'autoFill' => true,
                            'minLength' => 0,
                            'select' => new JsExpression("function( event, ui ) {
                            $('#xjcrs-party').val(ui.item.id);
                        }"),
                            'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                        ],
                    ]);
                    ?>
                    <div class="help-block"></div>
                </div>
                <?= Html::activeHiddenInput($model, 'party') ?>

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'duties')->textInput(['maxlength' => true]) ?>

                <div class="form-group field-xjcrs-group">
                    <label class="control-label" for="xjcrs-group">所属群体</label>
                    <?php
                    $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_XJC_GROUP);
                    echo AutoComplete::widget([
                        'name' => 'group_name',
                        'id' => 'group_name',
                        'value' => \app\tools\OutFormat::formatDict($model->group, \app\tools\Constants::DICT_CONTENT_XJC_GROUP),
                        'options' => ['class' => 'form-control autoC'],
                        'clientOptions' => [
                            'source' => $data,
                            'autoFill' => true,
                            'minLength' => 0,
                            'select' => new JsExpression("function( event, ui ) {
                            $('#xjcrs-group').val(ui.item.id);
                        }"),
                            'focus' => new JsExpression("function( event, ui ) {
                            return false;
                        }")
                        ],
                    ]);
                    ?>
                    <div class="help-block"></div>
                </div>
                <?= Html::activeHiddenInput($model, 'group') ?>

                <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'resume')->textarea(['cols' => 30, 'rows' => 10]) ?>

                <?= $form->field($model, 'detail')->textarea(['cols' => 30, 'rows' => 10]) ?>

                <?= $form->field($model, 'isCPPCC')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>

                <?= $form->field($model, 'isNPC')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>


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