<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ssmz */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ssmzs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssmz-view">

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
        <div class="panel-heading">少数名族人员信息</div>
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
                    'birthday',
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
                    'region',
                    'addr',
                    'company',
                    'tel',
                    [
                        'attribute' => 'ispoor',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatYesNo($model->ispoor),
                    ]
                ],
            ]) ?>

        </div>
    </div>
    <?php if ($model->ispoor): ?>
        <div class="panel panel-default panel-info">
            <div class="panel-heading">贫困信息</div>
            <div class="panel-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'income',
                        'familydetail',
                        'poordetail',
                        'remark',
                    ],
                ]) ?>

            </div>
        </div>
    <?php endif ?>
</div>
