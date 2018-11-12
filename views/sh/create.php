<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sh */

$this->title = Yii::t('app', 'Create Sh');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
