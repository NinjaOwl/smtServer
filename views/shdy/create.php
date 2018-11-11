<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Shdy */

$this->title = Yii::t('app', 'Create Shdy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shdies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shdy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
