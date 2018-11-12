<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 2018/11/12
 * Time: 17:13
 */

namespace app\services;


use Exception;
use Yii;

class LoginService
{
    /**
     *
     * 获取token里的所有信息
     * @param $token
     * @return mixed
     */
    static function getAllTokenInfo($token)
    {
        try {
            $redis = Yii::$app->redis;
            $redis->select(2);
            $id = $redis->get($token);
            return $id;
        } catch (Exception $e) {
            Yii::error($e->getMessage(), 'yii\error\getAllTokenInfo');
            return null;
        }
    }
}