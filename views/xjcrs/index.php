<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\XjcrsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Xjcrs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xjcrs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Xjcrs'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Export'), 'download', ['class' => 'btn btn-primary glyphicon glyphicon-download-alt', 'id' => 'export']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::a($data->name, "/xjcrs/view?id={$data->id}", []);
                }
            ],
            [
                'attribute' => 'group',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDict($data->group, \app\tools\Constants::DICT_CONTENT_XJC_GROUP);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'group', \yii\helpers\ArrayHelper::map(\app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_XJC_GROUP), 'id', 'value'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            [
                'attribute' => 'party',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDict($data->party, \app\tools\Constants::DICT_CONTENT_DP);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'party', \yii\helpers\ArrayHelper::map(\app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_DP), 'id', 'value'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'birthday',
            // 'penname',
            // 'education',
            // 'degree',
            // 'place',
            // 'party',
            // 'title',
             'idcard',
            // 'company',
            // 'duties',
            // 'group',
            // 'addr',
            // 'tel',
            // 'email:email',
            // 'avatar',
            // 'detail',
            [
                'attribute' => 'isCPPCC',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatYesNo($data->isCPPCC);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'isCPPCC', \app\tools\CommonFunc::getYesNoList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            [
                'attribute' => 'isNPC',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatYesNo($data->isNPC);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'isNPC', \app\tools\CommonFunc::getYesNoList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'resume',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
