<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShhySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shhy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'birthday') ?>

    <?= $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'party') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'duties') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'wxid') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'shid') ?>

    <?php // echo $form->field($model, 'shtime') ?>

    <?php // echo $form->field($model, 'majorduties') ?>

    <?php // echo $form->field($model, 'majorhonors') ?>

    <?php // echo $form->field($model, 'resume') ?>

    <?php // echo $form->field($model, 'e_name') ?>

    <?php // echo $form->field($model, 'e_legalrepre') ?>

    <?php // echo $form->field($model, 'e_registrationaddr') ?>

    <?php // echo $form->field($model, 'e_establishdate') ?>

    <?php // echo $form->field($model, 'e_registno') ?>

    <?php // echo $form->field($model, 'e_industry') ?>

    <?php // echo $form->field($model, 'e_employeno') ?>

    <?php // echo $form->field($model, 'e_addr') ?>

    <?php // echo $form->field($model, 'e_contactname') ?>

    <?php // echo $form->field($model, 'e_contactduties') ?>

    <?php // echo $form->field($model, 'e_contactemail') ?>

    <?php // echo $form->field($model, 'e_contacttel') ?>

    <?php // echo $form->field($model, 'e_contactfax') ?>

    <?php // echo $form->field($model, 'isestablishparty') ?>

    <?php // echo $form->field($model, 'partymemberno') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
