<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/12
 * Time: 14:47
 */

namespace app\modules\v1;
use Yii;
class Module extends \yii\base\Module
{
    public function init()
    {
    	Yii::$app->errorHandler->errorAction='wx/error/notfound';
        parent::init();
    }
}