<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nyrbt */

$this->title = Yii::t('app', 'Create Nyrbt');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nyrbts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nyrbt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
