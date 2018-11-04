<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dwrs */

$this->title = Yii::t('app', 'Create Dwrs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dwrs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dwrs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
