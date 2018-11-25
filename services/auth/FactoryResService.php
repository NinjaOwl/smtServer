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
use Yii;
use yii\helpers\ArrayHelper;

class FactoryResService
{
    public function getFactoryIdArray($resId)
    {
        $list = ResourcesFactory::find()->select("factory_id")->where("resource_id=:resource_id", array(":resource_id" => $resId))->asArray()->all();
        return ArrayHelper::getColumn($list, "factory_id");
    }

    /**
     * 更新
     * @param $resId
     * @param $newIdArray
     * @return bool|int
     */
    public function updateBatch($resId, $newIdArray)
    {
        $oldIdArray = $this->getFactoryIdArray($resId);
        if (empty($oldIdArray)) {
            if (empty($newIdArray) == false) {
                return $this->addBatch($resId, $newIdArray);
            }
        } else {
            if (empty($newIdArray)) {
                return $this->deleteAll($resId);
            } else {
                $adds = array();
                $dels = array();
                foreach ($newIdArray as $nid) {
                    if (!in_array($nid, $oldIdArray)) {
                        $adds[] = $nid;
                    }
                }
                foreach ($oldIdArray as $oid) {
                    if (!in_array($oid, $newIdArray)) {
                        $dels[] = $oid;
                    }
                }
                if (empty($adds) == false) {
                    $this->addBatch($resId, $adds);
                }
                if (empty($dels) == false) {
                    $this->deleteBatch($resId, $dels);
                }
                return true;
            }
        }
    }

    public function addBatch($resId, $factoryIdArray)
    {
        $array = [];
        $columns = ['factory_id', 'resource_id'];
        foreach ($factoryIdArray as $fId) {
            $array[] = [$fId, $resId];
        }
        return Yii::$app->db->createCommand()->batchInsert(ResourcesFactory::tableName(), $columns, $array)->execute();
    }

    public function deleteAll($resId)
    {
        return ResourcesFactory::deleteAll("resource_id=:res_id", array(":res_id" => $resId));
    }


    public function deleteBatch($resId, $factoryIdArray)
    {
        $factoryIds = join(",", $factoryIdArray);
        return ResourcesFactory::deleteAll("resource_id=:res_id and factory_id in(:fids)", array(":res_id" => $resId, ":fids" => $factoryIds));
    }
}