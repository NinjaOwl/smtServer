<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:16
 */

namespace app\services\auth;


use app\format\FormatPaging;
use app\format\FormatRes;
use app\format\FormatResList;
use app\models\Resources;
use app\models\ResourcesFactory;
use app\tools\ErrorCode;
use app\tools\OutTools;

class ResService
{
    /**
     * 获取资源列表
     * @param $factoryId
     * @param $resName
     * @param int $max
     * @param int $page
     * @return array
     */
    public function getList($factoryId, $resName, $max = 10, $page = 1)
    {
        $condition = "1=1";
        $param = [];
        if (empty($factoryId) == false) {
            $condition .= " and rf.factory_id=:factory_id";
            $param[":factory_id"] = $factoryId;
            if (empty($resName) == false) {
                $condition .= " and r.name like :name";
                $param[":name"] = "%" . $resName . "%";
            }
            $totalCount = Resources::find()->alias("r")->leftJoin(ResourcesFactory::tableName() . " as rf", 'r.id=rf.resource_id')->where($condition, $param)->count();
            $offset = ($page - 1) * $max;
            $array = Resources::find()->alias("r")->leftJoin(ResourcesFactory::tableName() . " as rf", 'r.id=rf.resource_id')->where($condition, $param)->asArray()->offset($offset)->limit($max)->all();

            return OutTools::success(array('list' => FormatResList::format($array), 'paging' => FormatPaging::format($totalCount, $max, $page)));

        } else {
            if (empty($resName) == false) {
                $condition .= " and name like :name";
                $param[":name"] = "%" . $resName . "%";
            }
            $totalCount = Resources::find()->where($condition, $param)->count();
            $offset = ($page - 1) * $max;
            $array = Resources::find()->where($condition, $param)->asArray()->offset($offset)->limit($max)->all();

            return OutTools::success(array('list' => FormatResList::format($array), 'paging' => FormatPaging::format($totalCount, $max, $page)));
        }

    }

    /**
     * 获取资源列表
     * @param $resId
     * @return array
     */
    public function get($resId)
    {
        $array = Resources::findOne($resId);
        if (empty($array) == false) {
            return OutTools::success(array('res' => FormatRes::format($array->toArray())));
        } else {
            return OutTools::error(ErrorCode::ERROR, \Yii::t('app', 'Not_Found', [\Yii::t('app', 'Res')]));
        }
    }
}