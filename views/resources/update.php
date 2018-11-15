<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resources */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Resources',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="resources-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>