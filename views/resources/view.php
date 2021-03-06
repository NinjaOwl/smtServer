<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Resources */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-view">

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
        <div class="panel-heading "><?php echo Yii::t('app', 'Resources') ?>信息</div>
        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name',
                    'desc',
                ],
            ]) ?>
        </div>
    </div>

    <div class="panel panel-default panel-info">
        <div class="panel-heading ">视频信息</div>
        <div class="panel-body">
            <?php
            if (empty($model->third_resource_id) == false) {
                if (empty($model->url) == false) {
                    ?>
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            [
                                'attribute' => 'thumb',
                                'avatar:image',
                                'format' => ['image', ['width' => '100', 'height' => '100', 'title' => $model->name]],
                                'value' => $model->thumb
                            ],
                            [
                                'attribute' => 'size',
                                'format' => 'raw',
                                'value' => \app\tools\OutFormat::formatSize($model->size),
                            ],
                            [
                                'attribute' => 'duration',
                                'format' => 'raw',
                                'value' => \app\tools\OutFormat::formatTimeLong($model->duration),
                            ],
                            [
                                'attribute' => 'url',
                                'format' => ['url', ['target' => '_blank']],
                                'value' => $model->url,
                            ],
                            [
                                'attribute' => 'created_at',
                                'format' => 'raw',
                                'value' => \app\tools\OutFormat::formatDate($model->created_at),
                            ],
                        ],
                    ]) ?>
                    <?php
                } else {
                    ?>
                    转码中
                    <?php
                }
            } else {
                ?>
                尚未上传视频
                <?php
            }
            ?>

        </div>
    </div>

    <div class="panel panel-default panel-info">
        <div class="panel-heading "><a style="float: right"
                                       href="<?php echo Url::toRoute(['attachment/create', 'rid' => $model->id]); ?>">添加资料</a>相关资料
        </div>
        <div class="panel-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
//                    'rid',
                    'name',
                    'desc',
//                    'suffix',
                    // 'size',
                    [
                        'attribute' => 'url',
                        'format' => ['url', ['target' => '_blank']],
                        'value' => function ($data) {
                            return \app\tools\OutFormat::formatImage($data->url);
                        },
                    ],
                    // 'created_at',
                    // 'creator_id',

                    ['class' => 'yii\grid\ActionColumn', 'header' => '操作', 'template' => ' {update} {delete}',
                        'buttons' => [
                            'update' => function ($url, $model) {
                                $url = Url::to("/attachment/update/" . $model->id);
                                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => '编辑', 'data-pjax' => '0']);
                            },
                            'delete' => function ($url, $model) {
                                $url = Url::to("/attachment/delete/" . $model->id);
                                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, ['title' => '删除', 'data-method' => 'post', 'data-confirm' => '您确定要删除此项吗？', 'aria-label' => '删除', 'data-pjax' => '0']);
                            },
                        ],
                        'headerOptions' => ['width' => '70']
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
