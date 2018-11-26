<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Resources;
use app\tools\VodTools;
use yii\console\Controller;

class ResController extends Controller
{
    /**
     *
     */
    public function actionUp()
    {
        $list = Resources::find()->where('convert_status=:convert_status', array(':convert_status' => Resources::CONVERT_STATUS_CONVERTING))->offset(0)->limit(10)->all();
        if (empty($list) == false) {
            foreach ($list as $model) {
                $vodtools = new VodTools();
                try {
                    print("third_resource_id:" . $model->third_resource_id);
                    $info = $vodtools->get_play_info($model->third_resource_id);
                    $data = array();
                    if ($info['VideoBase']['Status'] == 'Normal') {
                        $data['duration'] = $info['PlayInfoList']['PlayInfo'][1]['Duration'];
                        $data['url'] = $info['PlayInfoList']['PlayInfo'][1]['PlayURL'];
                        $data['size'] = $info['PlayInfoList']['PlayInfo'][1]['Size'];
                        $data['thumb'] = $info['VideoBase']['CoverURL'];
                        $data['convert_status'] = Resources::CONVERT_STATUS_FISHING;
                        $data['suffix'] = $info['PlayInfoList']['PlayInfo'][1]['Format'];
                        print("third_resource_id:" . $model->third_resource_id . " finishing");
                        Resources::updateAll($data, 'id=:id', array(':id' => $model->id));
                    }
                } catch (\Exception $e) {
                    //还在转码中
                }
            }
        }
    }
}