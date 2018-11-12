<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;

use yii\web\Controller;


class AppController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     *
     * @api {post}  /v1/app/get  获取最新版本信息
     * @apiDescription 获取最新版本信息
     * @apiName /v1/app/get
     * @apiGroup app
     * @apiVersion 3.1.0
     * @apiHeader {String} ecg_token
     * @apiHeader {String} ecg_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiSampleRequest /v1/app/get
     * @apiHeaderExample {string} Header-Example:
     *     {
     *       "ecg_token": "wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3",
     *       "ecg_lang": "zh",
     *       "app_type": "smt_client",
     *       "app_version": "2.4.7",
     *     }
     * @apiSuccess {String} code 200.
     * @apiSuccess {String} msg 消息
     * @apiSuccess {json} data 数据
     * @apiSuccess {json} data.version 版本
     * @apiSuccess {int} data.version.version_id 版本编号
     * @apiSuccess {string} data.version.version_code 版本号
     * @apiSuccess {string} data.version.version_content 版本内容
     * @apiSuccess {string} data.version.version_url 版本地址
     * @apiSuccess {string} data.version.is_force 是否强制
     * @apiSuccessExample {json} 正确实例:
     *
     * {
     * "code": 200,
     * "data": {
     *   'version':{
     *   'version_id':,
     *   'version_code':
     *   'version_content':
     *   'version_url':
     *   'is_force':
     * }
     * },
     * "msg": "请求成功"
     * }
     *
     * @apiError {String} code 错误码<br>
     * 0：系统错误<br>
     * @apiError {String} msg 错误消息
     * @apiErrorExample {json} 错误实例:
     * {
     * "code": "0",
     * "msg": "服务繁忙",
     * "data": []
     * }
     */
    public function actionGet()
    {

    }

    
}