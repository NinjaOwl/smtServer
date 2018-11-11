<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shhy */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shhies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shhy-view">

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
        <div class="panel-heading">个人信息</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
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
                    'region',
                    [
                        'attribute' => 'party',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->party, \app\tools\Constants::DICT_CONTENT_DP),
                    ],
                    [
                        'attribute' => 'education',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->education, \app\tools\Constants::DICT_CONTENT_XL),
                    ],
                    [
                        'attribute' => 'degree',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->degree, \app\tools\Constants::DICT_CONTENT_XW),
                    ],
                    'title',
                    'idcard',
                    'company',
                    'duties',
                    'addr',
                    'tel',
                    'wxid',
                    'email:email'
                ],
            ]) ?>
        </div>
    </div>
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">所属商会</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute' => 'shid',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatSh($model->shid),
                    ],
                    'shtime',
                ],
            ]) ?>
        </div>
    </div>
    <div class="panel panel-default panel-info">
        <div class="panel-heading">社会荣誉及企业详情</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'majorduties',
                    'majorhonors',
                    'resume',
                    'e_name',
                    'e_legalrepre',
                    'e_registrationaddr',
                    'e_establishdate',
                    'e_registno',
                    'e_industry',
                    'e_employeno',
                    'e_addr',
                    'e_contactname',
                    'e_contactduties',
                    'e_contactemail:email',
                    'e_contacttel',
                    'e_contactfax',
                    [
                        'attribute' => 'isestablishparty',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatYesNo($model->isestablishparty),
                    ],
                    [
                        'attribute' => 'partymemberno',
                        'format' => 'raw',
                        'value' => $model->isestablishparty ? $model->partymemberno : '',
                    ]
                ],
            ]) ?>
        </div>
    </div>
</div>
