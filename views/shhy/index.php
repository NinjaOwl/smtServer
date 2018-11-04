<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShhySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Shhies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shhy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Shhy'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    return Html::a($data->name, "/shhy/view?id={$data->id}", []);
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
//            'company',
//            'tel',
            'idcard',
            // 'region',
            // 'party',
            // 'education',
            // 'degree',
            // 'title',
            // 'idcard',
            // 'company',
            // 'duties',
            // 'addr',
            // 'tel',
            // 'wxid',
            // 'email:email',
//             'shid',
            [
                'attribute' => 'shid',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatSh($data->shid);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'shid', ArrayHelper::map(\app\models\Sh::find()->all(), 'id', 'nane'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'shtime',
            // 'majorduties',
            // 'majorhonors',
            // 'resume',
            // 'e_name',
            // 'e_legalrepre',
            // 'e_registrationaddr',
            // 'e_establishdate',
            // 'e_registno',
            // 'e_industry',
            // 'e_employeno',
            // 'e_addr',
            // 'e_contactname',
            // 'e_contactduties',
            // 'e_contactemail:email',
            // 'e_contacttel',
            // 'e_contactfax',
            // 'isestablishparty',
            // 'partymemberno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

