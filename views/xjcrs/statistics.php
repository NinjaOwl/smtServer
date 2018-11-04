<?php


use daixianceng\echarts\ECharts;
use yii\helpers\Html;
use yii\web\JsExpression;


/* @var $this yii\web\View */
/* @var $model app\models\Xjcrs */

$this->title = '统计分布图';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Xjcrs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xjcrs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-default panel-info">
        <div class="panel-heading ">分类统计图</div>
        <div class="panel-body">
            <?= ECharts::widget([
                'responsive' => true,
                'options' => [
                    'style' => 'height: 400px;'
                ],
                'pluginEvents' => [
                    'click' => [
                        new JsExpression('function (params) {console.log(params)}'),
                        new JsExpression('function (params) {console.log("ok")}')
                    ],
                    'legendselectchanged' => new JsExpression('function (params) {console.log(params.selected)}')
                ],
                'pluginOptions' => [
                    'option' => [
                        'title' => [
                            'text' => "分类统计图(共{$totalNum}人)",

                            'x' => 'center'
                        ],
                        'tooltip' => [
                            'trigger' => 'item',
                            'formatter' => "{a} <br/>{b} : {c}人 ({d}%)"
                        ],
                        'legend' => [
                            'orient' => 'vertical',
                            'left' => 'left',
                            'data' => $groupItemList
                        ],
                        'series' => [
                            [
                                'name' => '所属群组',
                                'type' => 'pie',
                                'radius' => '55%',
                                'center' => ['50%', '60%'],
                                'data' => $statisticsItemList,
                                'itemStyle' => [
                                    'emphasis' => [
                                        'shadowBlur' => 10,
                                        'shadowOffsetX' => 0,
                                        'shadowColor' => 'rgba(0, 0, 0, 0.5)'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]); ?>
        </div>
    </div>
</div>