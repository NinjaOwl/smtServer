<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SsmzSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Ssmzs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ssmz-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Ssmz'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    return Html::a($data->name, "/ssmz/view?id={$data->id}", []);
                }
            ],
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
//            'birthday',
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
            // 'region',
            // 'addr',
            // 'company',
             'tel',
            // 'ispoor',
            [
                'attribute' => 'ispoor',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatYesNo($data->ispoor);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'ispoor', \app\tools\CommonFunc::getYesNoList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            [
                'attribute' => 'community',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDict($data->community, \app\tools\Constants::DICT_CONTENT_SQ);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'community', \yii\helpers\ArrayHelper::map(\app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_SQ), 'id', 'value'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'income',
            // 'familydetail',
            // 'poordetail',
            // 'remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
