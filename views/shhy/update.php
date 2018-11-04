<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Shhy */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
        'modelClass' => Yii::t('app', 'Shhy'),
    ]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shhies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shhy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
