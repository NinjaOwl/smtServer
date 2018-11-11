<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Xjcrs */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Xjcrs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xjcrs-view">

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
        <div class="panel-heading ">新社会阶层人士信息</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute'=>'avatar',
                        'avatar:image',
                        'format' => ['image',['width'=>'100','height'=>'100','title'=>$model->name]],
                        'value'=> \app\tools\OutFormat::formatImage($model->avatar)
                    ],
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
                    'region',
                    'birthday',
                    'penname',
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
                    'place',
                    [
                        'attribute' => 'party',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->party, \app\tools\Constants::DICT_CONTENT_DP),
                    ],
                    'title',
                    'idcard',
                    'company',
                    'duties',
                    [
                        'attribute' => 'group',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->group, \app\tools\Constants::DICT_CONTENT_XJC_GROUP),
                    ],
                    'addr',
                    'tel',
                    'email:email',
                    'detail',
                    [
                        'attribute' => 'isCPPCC',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatYesNo($model->isCPPCC),
                    ],
                    [
                        'attribute' => 'isNPC',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatYesNo($model->isNPC),
                    ],
                    'resume',
                ],
                'template' => '<tr><th style="width: 120px">{label}</th><td>{value}</td></tr>',
            ]) ?>
        </div>
    </div>
</div>
