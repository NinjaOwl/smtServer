<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:16
 */

namespace app\services\auth;


use app\format\FormatAttach;
use app\format\FormatDevice;
use app\format\FormatDeviceList;
use app\format\FormatPaging;
use app\format\FormatRes;
use app\format\FormatResList;
use app\format\FormatVideo;
use app\models\Attachment;
use app\models\Resources;
use app\models\ResourcesFactory;
use app\tools\ErrorCode;
use app\tools\OutTools;

class AttachmentService
{


    /**
     * 获取资源列表2
     * @param $resId
     * @param $max
     * @param $page
     * @return array
     */
    public function getList($resId, $max = 10, $page = 1)
    {
        $array = Resources::findOne($resId);
        if (empty($array) == false) {
            $resourcesListSize = Attachment::find()->where("rid=:rid", array(":rid" => $resId))->count();
            $resourcesList = [];
            if ($resourcesListSize > 0) {
                $offset = ($page - 1) * $max;
                $resourcesList = Attachment::find()->where("rid=:rid", array(":rid" => $resId))->asArray()->orderBy('created_at desc')->offset($offset)->limit($max)->all();
            }
            return OutTools::success(array('list' => FormatAttach::format($resourcesList), 'paging' => FormatPaging::format($resourcesListSize, $max, $page)));
        } else {
            return OutTools::error(ErrorCode::ERROR, \Yii::t('app', 'Not_Found', [\Yii::t('app', 'Res')]));
        }
    }
}