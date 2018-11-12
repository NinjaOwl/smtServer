<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ShdySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shdy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'nation') ?>

    <?= $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'partytime') ?>

    <?php // echo $form->field($model, 'formalpartytime') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
