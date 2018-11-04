<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JzrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jzries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jzry-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Jzry'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Export'), 'download', ['class' => 'btn btn-primary glyphicon glyphicon-download-alt', 'id' => 'export']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'name',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::a($data->name, "/jzry/view?id={$data->id}", []);
                }
            ],
            'alias',
            [
                'attribute' => 'gender',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatSex($data->gender);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'gender', \app\tools\CommonFunc::getSexList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            //'birthday',
            // 'nation',
            [
                'attribute' => 'nation',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDict($data->nation, \app\tools\Constants::DICT_CONTENT_MZ);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'nation', \yii\helpers\ArrayHelper::map(\app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_MZ), 'id', 'value'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'religion',
            [
                'attribute' => 'religion',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDict($data->religion, \app\tools\Constants::DICT_CONTENT_JB);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'religion', \yii\helpers\ArrayHelper::map(\app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_JB), 'id', 'value'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'faculty',
            // 'idcard',
            // 'addr',
            // 'residence',
            // 'tel',
            // 'certificateno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
