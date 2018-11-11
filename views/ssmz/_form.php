<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\jui\AutoComplete;
use yii\web\JsExpression;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ssmz */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="ssmz-form">
        <?php $form = ActiveForm::begin(); ?>
        <div class="panel panel-default panel-info">
            <div class="panel-heading ">少数民族人员信息</div>
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

                <div class="form-group field-ssmz-nation">
                    <label class="control-label" for="ssmz-nation">民族</label>
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
                $('#ssmz-nation').val(ui.item.id);
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

            <div class="form-group field-ssmz-community">
                <label class="control-label" for="ssmz-community">所属社区</label>
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
                $('#ssmz-community').val(ui.item.id);
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

            <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'ispoor')->radioList(\app\tools\CommonFunc::getYesNoList()) ?>
            </div>
        </div>
        <div class="panel panel-default panel-info" id="poor_info">
            <div class="panel-heading ">贫困信息</div>
            <div class="panel-body">

                <?= $form->field($model, 'income')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'familydetail')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'poordetail')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>



            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

<?php $this->beginBlock('script') ?>
    $(function(){
    $(".autoC").focus(function(){
    $(this).autocomplete("search");
    })
    $("input[type='radio']", $("#ssmz-ispoor")).change(function(){
    showPoor($(this));
    });

    function showPoor(obj){
    var is_poor = obj.val();
    if(is_poor==1){
    $("#poor_info").show();
    }else{
    $("#poor_info").hide();
    }
    }
    showPoor($("input:checked", $("#ssmz-ispoor")));
    });

<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['script'], \yii\web\View::POS_END); ?>