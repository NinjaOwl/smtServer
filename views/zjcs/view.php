<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Zjcs */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zjcs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zjcs-view">

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
        <div class="panel-heading ">基础信息</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute' => 'photo',
                        'avatar:image',
                        'format' => ['image', ['width' => '100', 'height' => '100', 'title' => $model->palcename]],
                        'value' => \app\tools\OutFormat::formatImage($model->photo)
                    ],
                    'palcename',
                    [
                        'attribute' => 'religion',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->religion, \app\tools\Constants::DICT_CONTENT_JB),
                    ],
                    'leader',
                    [
                        'attribute' => 'gender',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatSex($model->gender),
                    ],
                    'idcard',
                    'tel',
                    'partytime',
                    'partymember'
                ],
            ]) ?>

        </div>
    </div>
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">社区联络信息</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    [
                        'attribute' => 'community',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->community, \app\tools\Constants::DICT_CONTENT_SQ),
                    ],
                    'liaison',
                    'liaisontel'
                ],
            ]) ?>

        </div>
    </div>
    <div class="panel panel-default panel-info">
        <div class="panel-heading ">场地及相关配套信息</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'certificatenumber',
                    'people',
                    'placearea',
                    'buildarea',
                    'monitors',
                    'extinguishers',
                    'memberno',
                    'remark',
                ],
            ]) ?>

        </div>
    </div>
</div>
