<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jzry */

$this->title = Yii::t('app', 'Create Jzry');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jzries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jzry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
