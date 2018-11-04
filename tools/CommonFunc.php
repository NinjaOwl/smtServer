<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/11
 * Time: 14:51
 */

namespace app\tools;


use moonland\phpexcel\Excel;
use Yii;

class CommonFunc
{
    public static function getSexList()
    {
        return [0 => '女', 1 => '男'];
    }

    public static function getDyTypeList()
    {
        return [0 => '预备党员', 1 => '正式党员'];
    }

    public static function getYesNoList()
    {
        return [0 => '否', 1 => '是'];
    }

    /**
     * 特殊处理
     * @param $cls
     * @param $exceptLabels
     * @return array
     */
    public static function resolveColumns($cls, $exceptLabels)
    {
        $columns = [
            'gender' =>
                [
                    'attribute' => 'gender',
                    'value' => function ($model) {
                        return \app\tools\OutFormat::formatSex($model->gender);
                    },
                ],
            'party' => [
                'attribute' => 'party',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->party, \app\tools\Constants::DICT_CONTENT_DP);
                },
            ],
            'nation' => [
                'attribute' => 'nation',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->nation, \app\tools\Constants::DICT_CONTENT_MZ);
                },
            ],
            'education' => [
                'attribute' => 'education',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->education, \app\tools\Constants::DICT_CONTENT_XL);
                },
            ],
            'degree' => [
                'attribute' => 'degree',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->degree, \app\tools\Constants::DICT_CONTENT_XW);
                },
            ],
            'community' => [
                'attribute' => 'community',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->community, \app\tools\Constants::DICT_CONTENT_SQ);
                },
            ],
            'group' => [
                'attribute' => 'group',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->group, \app\tools\Constants::DICT_CONTENT_XJC_GROUP);
                },
            ],
            'religion' => [
                'attribute' => 'religion',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDict($model->religion, \app\tools\Constants::DICT_CONTENT_JB);
                },
            ],
            'shid' => [
                'attribute' => 'shid',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatSh($model->shid);
                },
            ],
            'category' => [
                'attribute' => 'category',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatDyType($model->category);
                },
            ],
            'isCPPCC' => [
                'attribute' => 'isCPPCC',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatYesNo($model->isCPPCC);
                },
            ],
            'isNPC' => [
                'attribute' => 'isNPC',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatYesNo($model->isNPC);
                },
            ],
            'ispoor' => [
                'attribute' => 'ispoor',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatYesNo($model->ispoor);
                },
            ],
            'isestablishparty' => [
                'attribute' => 'isestablishparty',
                'value' => function ($model) {
                    return \app\tools\OutFormat::formatYesNo($model->isestablishparty);
                },
            ]
        ];
        $newCls = [];
        foreach ($cls as $attributeKey) {
            if ($attributeKey == 'id') {
                continue;
            }
            if (isset($exceptLabels[$attributeKey])) {
                continue;
            }
            if (isset($columns[$attributeKey])) {
                $newCls[] = $columns[$attributeKey];
            } else {
                $newCls[] = $attributeKey;
            }
        }
        return $newCls;

    }

    public static function resolveHeaders(&$headers, $exceptHeaders)
    {
        if (empty($exceptHeaders) == false) {
            foreach ($exceptHeaders as $key => $value) {
                unset($headers[$key]);
            }
        }
    }

    /**
     * 导出excel
     * @param $searchModel
     * @param $fileName
     * @param $exceptLabels
     * @return string
     */
    public static function exportSearch($searchModel, $fileName, $exceptLabels = [])
    {
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 3000; //最大支持导出3000个用户数据
        $columnLabelMap = $searchModel->attributeLabels();
        $columnLabels = array_keys($columnLabelMap);
        $columns = self::resolveColumns($columnLabels, $exceptLabels);
        $data = $dataProvider->getModels();
        $labels = $searchModel->attributeLabels();
        self::resolveHeaders($labels, $exceptLabels);
        return Excel::widget([
            'models' => $data,
            'mode' => 'export',
            'format' => 'Excel5',
            'columns' => $columns,
            'headers' => $labels,
            'fileName' => $fileName
        ]);
    }

    public static function getPartyNumList()
    {
        return ["0-19" => '20人以下', "20-49" => '20到49人', "50-99" => '50到99人', "100-199" => '100到199人', "200-" => '200人以上',];
    }
}