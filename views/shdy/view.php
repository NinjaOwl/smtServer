<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Shdy */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shdies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shdy-view">

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
        <div class="panel-heading ">党员信息</div>
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
                    [
                        'attribute' => 'nation',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->nation, \app\tools\Constants::DICT_CONTENT_MZ),
                    ],
                    'idcard',
                    'birthday',
                    [
                        'attribute' => 'education',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDict($model->education, \app\tools\Constants::DICT_CONTENT_XL),
                    ],
                    'partytime',
                    'formalpartytime',
                    'tel',
                    'addr',
                    [
                        'attribute' => 'category',
                        'format' => 'raw',
                        'value' => \app\tools\OutFormat::formatDyType($model->category),
                    ],
                ],
            ]) ?>

        </div>
    </div>
</div>
