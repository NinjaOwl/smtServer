<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2018/11/13
 * Time: 11:38
 */

namespace app\format;


class FormatRes
{
    public static function format($data)
    {
        $newData = [];
        if (empty($data) == false) {
            $newData['res_id'] = $data['id'];
            $newData['res_name'] = $data['name'];
            $newData['res_desc'] = $data['desc'];
            $newData['res_suffix'] = $data['suffix'];
            $newData['res_thumb'] = $data['thumb'];
            $newData['res_url'] = $data['url'];
        }
        return $newData;
    }

}