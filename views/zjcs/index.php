<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZjcsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Zjcs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zjcs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Zjcs'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Export'), 'download', ['class' => 'btn btn-primary glyphicon glyphicon-download-alt', 'id' => 'export']) ?>

    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'palcename',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::a($data->palcename, "/zjcs/view?id={$data->id}", []);
                }
            ],
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
            'leader',
//            [
//                'attribute' => 'gender',
//                'value' => function ($data) {
//                    return \app\tools\OutFormat::formatSex($data->gender);
//                },
//                'filter' => Html::activeDropDownList($searchModel,
//                    'gender', \app\tools\CommonFunc::getSexList(),
//                    ['prompt' => '全部', 'class' => 'form-control']
//                )
//            ],
            // 'idcard',
            // 'tel',
            // 'partytime',
            // 'community',
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
            [
                'attribute' => 'partymember',
                'value' => function ($data) {
                    return $data->partymember;
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'partymember', \app\tools\CommonFunc::getPartyNumList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
//             'liaison',
//             'liaisontel',
            // 'monitors',
            // 'extinguishers',
            // 'certificatenumber',
            // 'people',
            // 'placearea',
            // 'buildarea',
            // 'memberno',
            // 'photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
