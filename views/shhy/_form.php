<?php

use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shhy */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="shhy-form">
        <?php $form = ActiveForm::begin(); ?>
        <div class="panel panel-default panel-info">
            <div class="panel-heading ">个人信息</div>
            <div class="panel-body">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'gender')->radioList(\app\tools\CommonFunc::getSexList()) ?>
                <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => '选择出生日期 ...'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]); ?>
                <div class="form-group field-shhy-nation">
                    <label class="control-label" for="shhy-nation">民族</label>
                    <?php
                    $data = \app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_MZ);
                    echo AutoComplete::widget([
                        'name' => 'nation_name',
                        'id' => 'nation_name',
                        'value' => \app\tools\OutFormat::formatDict($model->nation, \app\tools\Constants::DICT_CONTENT_MZ),
                        'options' => ['class' => 'form-control autoC'],
                        'clientOptions' => [
                            'source' => $data,
                            'autoFill' => true,
                            'minLength' => 0,
                            'select' => new JsExpression("function( event, ui ) {
                $('#shhy-nation').val(ui.item.id);
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
                <div class="form-group field-shhy-party">
                    <label class="control-label" for="shhy-party">党派</label>
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
                            $('#shhy-party').val(ui.item.id);
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
                <div class="form-group field-shhy-education">
                    <label class="control-label" for="shhy-education">学历</label>
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
                $('#shhy-education').val(ui.item.id);
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

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'idcard')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'duties')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'wxid')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            </div>
        </div>

        <div class="panel panel-default panel-info">
            <div class="panel-heading ">所属商会</div>
            <div class="panel-body">
                <?php

                $allShList = \app\models\Sh::find()->all();
                $propertyList = ArrayHelper::map($allShList, 'id', 'e_show');
                $newPS = array();
                if (empty($propertyList) == false) {
                    foreach ($propertyList as $key => $p) {
                        $newPS[$key] = ['e_show' => $p];
                    }
                }
                ?>
                <?= $form->field($model, 'shid')->dropDownList(ArrayHelper::map($allShList, 'id', 'nane'), ['options' => $newPS]) ?>

                <?= $form->field($model, 'shtime')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => '选择入会时间.'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]); ?>
            </div>
        </div>
        <div class="panel panel-default panel-info" id="e-show-info">
            <div class="panel-heading ">社会荣誉及企业详情</div>
            <div class="panel-body">
                <?= $form->field($model, 'majorduties')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'majorhonors')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'resume')->textarea(['maxlength' => true, 'cols' => 30, 'rows' => 10]) ?>

                <?= $form->field($model, 'e_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_legalrepre')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_registrationaddr')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_establishdate')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => '选择日期 ...'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                    ]
                ]); ?>

                <?= $form->field($model, 'e_registno')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_industry')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_employeno')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_addr')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_contactname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_contactduties')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_contactemail')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_contacttel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'e_contactfax')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'isestablishparty')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>

                <?= $form->field($model, 'partymemberno')->textInput(['maxlength' => true]) ?>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

            </div>

        </div>


        <?php ActiveForm::end(); ?>

    </div>

<?php $this->beginBlock('script') ?>
    $(function(){

    $("#shhy-isestablishparty input").on("change", function () {
    checkPartyNumber($(this));
    });
    checkPartyNumber($("input:checked", $("#shhy-isestablishparty")));
    function checkPartyNumber(obj){
    if (obj.prop('value') == 1) {
    $(".field-shhy-partymemberno").show();
    } else {
    $(".field-shhy-partymemberno").hide();
    $("#shhy-partymemberno").val('');
    }
    }

    $(".autoC").focus(function(){
    $(this).autocomplete("search");
    })

    $("#shhy-shid").change(function(){
    showE($(this).find("option:selected"));
    });
    showE($("#shhy-shid").find("option:selected"));
    function showE(obj){
    var e_show = obj.attr("e_show") == "1"?1:0;

    if(e_show==1){
    $("#e-show-info").show();
    }else{
    $("#e-show-info").hide();
    }
    }

    });

<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['script'], \yii\web\View::POS_END); ?>