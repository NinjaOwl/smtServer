<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:16
 */

namespace app\services\auth;


use app\format\FormatFactoryList;
use app\models\Factory;
use app\tools\OutTools;

class FactoryService
{
    public function getList()
    {

        $array = Factory::find()->asArray()->all();
        return OutTools::success(array('list'=>FormatFactoryList::format($array)));
    }
}