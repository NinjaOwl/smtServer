<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:16
 */

namespace app\services\auth;


use mdm\admin\models\User;

class UsersService
{
    /**
     * 登录
     * @param $userName
     * @param $password
     */
    public function login($userName, $password)
    {
        $info = User::findByUsername($userName);
        
    }
}