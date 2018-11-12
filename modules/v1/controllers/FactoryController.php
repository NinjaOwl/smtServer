<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;

use yii\web\Controller;


class FactoryController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     *
     * @api {post}  /v1/factory/list  获取工厂地址
     * @apiDescription 获取工厂地址
     * @apiName /v1/factory/list
     * @apiVersion 3.1.0
     * @apiHeader {String} ecg_token
     * @apiHeader {String} ecg_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiSampleRequest /v1/factory/list
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
     * @apiSuccess {json[]} data.list 数据
     * @apiSuccess {int} data.list.factory_id 工厂编号
     * @apiSuccess {string} data.list.factory_name 工厂名称
     * @apiSuccess {string} data.list.factory_address 工厂地址
     * @apiSuccessExample {json} 正确实例:
     *
     * {
     * "code": 200,
     * "data": {
     *   "list":[{
     *   "factory_id":1,
     *   "factory_name":""
     *   "factory_address":""
     * }]
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
    public function actionList()
    {

    }
}