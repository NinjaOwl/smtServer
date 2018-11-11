<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SsmzSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ssmz-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'birthday') ?>

    <?= $form->field($model, 'nation') ?>
    <?= $form->field($model, 'community') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'ispoor') ?>

    <?php // echo $form->field($model, 'income') ?>

    <?php // echo $form->field($model, 'familydetail') ?>

    <?php // echo $form->field($model, 'poordetail') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
