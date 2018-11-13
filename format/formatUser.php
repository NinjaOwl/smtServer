<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2018/11/13
 * Time: 11:38
 */

namespace app\format;


use app\models\Factory;

class formatUser
{
    public static function format($data)
    {
        $newData = [
            'id' => $data['id'],
            'name' => $data['name'],
            'username' => $data['username'],
            'sex' => $data['sex'],
            'factory_id' => 0,
            'factory_name' => '',
        ];
        if (empty($data['factory_id'])) {
            $factory = Factory::findOne($data['factory_id']);
            if (empty($factory) == false) {
                $newData['factory_name'] = $factory->name;
                $newData['factory_id'] = $factory->id;
            }
        }
        return $newData;
    }

}