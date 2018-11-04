<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dwrs */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="dwrs-form">
        <div class="panel panel-default panel-info">
            <div class="panel-heading ">党外人士信息</div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>

                <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => '选择出生年月.'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]); ?>

                <div class="form-group field-dwrs-nation">
                    <label class="control-label" for="dwrs-nation">民族</label>
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
                $('#dwrs-nation').val(ui.item.id);
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

                <div class="form-group field-dwrs-education">
                    <label class="control-label" for="dwrs-education">学历</label>
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
                $('#dwrs-education').val(ui.item.id);
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

                <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

                <div class="form-group field-dwrs-party">
                    <label class="control-label" for="dwrs-party">党派</label>
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
                            $('#dwrs-party').val(ui.item.id);
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

                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'duties')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>
                <div class="form-group field-dwrs-community">
                    <label class="control-label" for="dwrs-community">所属社区</label>
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
                $('#dwrs-community').val(ui.item.id);
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

                <?= $form->field($model, 'isCPPCC')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>

                <?= $form->field($model, 'isNPC')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>

                <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

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