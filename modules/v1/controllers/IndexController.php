<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;

use yii\web\Controller;


class IndexController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * 判断邀请码是否存在
     */
    public function actionIndex()
    {
        echo "v1.0";
    }
}