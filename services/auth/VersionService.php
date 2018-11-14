<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/12
 * Time: 23:16
 */

namespace app\services\auth;


use app\format\FormatUser;
use app\format\FormatVersion;
use app\models\Version;
use app\services\LoginService;
use app\tools\ErrorCode;
use app\tools\OutTools;
use mdm\admin\models\User;

class VersionService
{
    /**
     * 获取最新的版本号
     */
    public function get()
    {
        $info = Version::find()->where("is_latest=1")->asArray()->one();
        if (empty($info) == false) {
            return OutTools::success(array('version' => FormatVersion::format($info)));
        } else {
            return OutTools::success((object)[]);
        }
    }
}