<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/22
 * Time: 18:50
 */

namespace app\tools;


use app\models\Dictcontent;
use app\models\Sh;
use Yii;

class OutFormat
{
    /**
     * 显示性别
     * @param $gender
     * @return mixed
     */
    public static function formatSex($gender)
    {
        if (isset($gender) && $gender !== '') {
            $sexList = CommonFunc::getSexList();
            return $sexList[$gender];
        } else {
            return $gender;
        }
    }

    public static function formatImage($images)
    {
        if ($images == '') {
            $images = 'default.jpg';
        }
        $basePath = Yii::$app->params['url_path'].$images;
        return $basePath;
    }

    /**
     *
     * @param $catalog
     * @return mixed
     */
    public static function formatDyType($catalog)
    {
        if (isset($catalog) && $catalog !== '') {
            $list = CommonFunc::getDyTypeList();
            return $list[$catalog];
        } else {
            return $catalog;
        }
    }

    /**
     *
     * @param $yesNo
     * @return mixed
     */
    public static function formatYesNo($yesNo)
    {
        if (isset($yesNo) && $yesNo !== '') {
            $list = CommonFunc::getYesNoList();
            return $list[$yesNo];
        } else {
            return $yesNo;
        }
    }

    /**
     * 展示字典数据
     * @param $code
     * @param $dictId
     * @return mixed
     */
    public static function formatDict($code, $dictId)
    {
        if (isset($code) && $code !== '' && empty($dictId) == false) {
            $info = Dictcontent::getDictContent($dictId, $code);
            if (empty($info) == false) {
                return $info['name'];
            }
        }
        return $code;
    }

    /**
     * 展示商会名称
     * @param $shid
     * @return mixed
     */
    public static function formatSh($shid)
    {
        if (isset($shid) && $shid != '') {
            $info = Sh::findOne($shid);
            if (empty($info) == false) {
                return $info->nane;
            }
        }
        return $shid;
    }
}