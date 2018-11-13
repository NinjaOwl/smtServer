<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2018/11/13
 * Time: 11:38
 */

namespace app\format;


class FormatFactoryList
{
    public static function format($dataArray)
    {
        $newDataArray = [];
        if (empty($dataArray) == false) {
            foreach ($dataArray as $rec){
                $newData['factory_id'] = $rec['id'];
                $newData['factory_name'] =$rec['name'];
                $newData['factory_address'] = $rec['addr'];
                $newDataArray[] = $newData;
            }
        }
        return $newDataArray;
    }

}