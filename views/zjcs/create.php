<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Zjcs */

$this->title = Yii::t('app', 'Create Zjcs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zjcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zjcs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
