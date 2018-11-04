<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Shhy */

$this->title = Yii::t('app', 'Create Shhy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shhies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shhy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
