<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZjcsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zjcs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'palcename') ?>

    <?= $form->field($model, 'religion') ?>

    <?= $form->field($model, 'leader') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'partytime') ?>

    <?php // echo $form->field($model, 'partymember') ?>

    <?php // echo $form->field($model, 'community') ?>

    <?php // echo $form->field($model, 'liaison') ?>

    <?php // echo $form->field($model, 'liaisontel') ?>

    <?php // echo $form->field($model, 'monitors') ?>

    <?php // echo $form->field($model, 'extinguishers') ?>

    <?php // echo $form->field($model, 'certificatenumber') ?>

    <?php // echo $form->field($model, 'people') ?>

    <?php // echo $form->field($model, 'placearea') ?>

    <?php // echo $form->field($model, 'buildarea') ?>

    <?php // echo $form->field($model, 'memberno') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
