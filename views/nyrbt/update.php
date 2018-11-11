<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nyrbt */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => Yii::t('app', 'Nyrbt'),
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nyrbts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="nyrbt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
