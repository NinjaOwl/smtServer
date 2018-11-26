<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Attachment */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('app', 'Attachment'),
]) . $model->name;
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Attachments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>Yii::t('app', 'Resources'), 'url' => ['resources/view', 'id' => $model->rid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="attachment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
