<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Xjcrs */

$this->title = Yii::t('app', 'Create Xjcrs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Xjcrs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xjcrs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
