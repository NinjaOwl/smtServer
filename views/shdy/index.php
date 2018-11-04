<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShdySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Shdies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shdy-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Shdy'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    return Html::a($data->name, "/shdy/view?id={$data->id}", []);
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
                'attribute' => 'nation',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDict($data->nation, \app\tools\Constants::DICT_CONTENT_MZ);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'nation', \yii\helpers\ArrayHelper::map(\app\models\Dictcontent::getDictContentList(\app\tools\Constants::DICT_CONTENT_MZ), 'id', 'value'),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            'idcard',
            // 'birthday',
            // 'education',
            [
                'attribute' => 'category',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatDyType($data->category);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'category', \app\tools\CommonFunc::getDyTypeList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            // 'partytime',
            // 'formalpartytime',
            // 'tel',
            // 'addr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
