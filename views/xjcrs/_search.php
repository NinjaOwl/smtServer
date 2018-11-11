<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\XjcrsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="xjcrs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'nation') ?>

    <?= $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'penname') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'place') ?>

    <?php // echo $form->field($model, 'party') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'idcard') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'duties') ?>

    <?php // echo $form->field($model, 'group') ?>

    <?php // echo $form->field($model, 'addr') ?>

    <?php // echo $form->field($model, 'tel') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'detail') ?>

    <?php // echo $form->field($model, 'isCPPCC') ?>

    <?php // echo $form->field($model, 'isNPC') ?>

    <?php // echo $form->field($model, 'resume') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
