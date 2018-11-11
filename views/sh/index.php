<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ShSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Shes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sh-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sh'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Export'), 'download', ['class' => 'btn btn-primary glyphicon glyphicon-download-alt', 'id' => 'export']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'nane',
                'format'=>'raw',
                'value' => function ($data) {
                    return Html::a($data->nane, "/sh/view?id={$data->id}", []);
                }
            ],

            [
                'attribute' => 'e_show',
                'value' => function ($data) {
                    return \app\tools\OutFormat::formatYesNo($data->e_show);
                },
                'filter' => Html::activeDropDownList($searchModel,
                    'e_show', \app\tools\CommonFunc::getYesNoList(),
                    ['prompt' => '全部', 'class' => 'form-control']
                )
            ],
            ['class' => 'yii\grid\ActionColumn'],
    ],
    ]); ?>
</div>
