<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JzrySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jzry-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'religion') ?>

    <?php // echo $form->field($model, 'faculty') ?>

    <?php // echo $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'residence') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'certificateno') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
