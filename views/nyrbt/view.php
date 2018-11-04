<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nyrbt */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nyrbts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nyrbt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <div class="panel panel-default panel-info">
        <div class="panel-heading">牛羊肉补贴人员信息</div>
        <div class="panel-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                        'attribute' => 'gender',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatSex($model->gender),
                    ],
            [
                'attribute' => 'nation',
                'format' => 'raw',
                'value' => \app\tools\OutFormat::formatDict($model->nation, \app\tools\Constants::DICT_CONTENT_MZ),
            ],
            [
                'attribute' => 'community',
                'format' => 'raw',
                'value' => \app\tools\OutFormat::formatDict($model->community, \app\tools\Constants::DICT_CONTENT_SQ),
            ],
            [
                'attribute' => 'community',
                'format' => 'raw',
                'value' => \app\tools\OutFormat::formatDict($model->community, \app\tools\Constants::DICT_CONTENT_SQ),
            ],
            'idcard',
            'tel',
            'workstatus',
            'remark',
        ],
    ]) ?>

</div>
</div>
</div>
