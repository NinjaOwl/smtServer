<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;

use yii\web\Controller;


class ResController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     *
     * @api {post}  /v1/res/list  获取资源列表
     * @apiDescription 获取资源列表
     * @apiName /v1/res/list
     * @apiVersion 3.1.0
     * @apiHeader {String} ecg_token
     * @apiHeader {String} ecg_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiParam {String} factory_id  工厂编号
     * @apiParam {String} res_name  资源名称
     * @apiSampleRequest /v1/res/list
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
     * @apiSuccess {json[]} data.list
     * @apiSuccess {int} data.res_id 资源编号
     * @apiSuccess {string} data.list.res_name 资源名称
     * @apiSuccess {string} data.list.res_desc 资源描述
     * @apiSuccess {string} data.list.res_suffix 文件后缀
     * @apiSuccess {string} data.list.res_thumb 缩略图
     * @apiSuccess {string} data.list.res_url 资源访问地址
     * @apiSuccessExample {json} 正确实例:
     *
     * {
     * "code": 200,
     * "data": {
     *   "list":[{
     *   "res_id":1,
     *   "res_name":"",
     *   "res_desc":"",
     *   "res_suffix":"",
     *   "res_thumb":"",
     *   "res_times":"11:01"
     *   "res_url":"",
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
    public function actionGetList()
    {

    }

    /**
     *
     * @api {post}  /v1/res/get  获取资源详情
     * @apiDescription 获取资源详情
     * @apiName /v1/res/get
     * @apiVersion 3.1.0
     * @apiHeader {String} ecg_token
     * @apiHeader {String} ecg_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiParam {String} res_id  资源编号
     * @apiSampleRequest /v1/res/get
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
     * @apiSuccess {json} data.res 数据
     * @apiSuccess {int} data.res.res_id 资源编号
     * @apiSuccess {string} data.res.res_name 资源名称
     * @apiSuccess {string} data.res.res_desc 资源描述
     * @apiSuccess {string} data.res.res_suffix 文件后缀
     * @apiSuccess {string} data.res.res_thumb 缩略图
     * @apiSuccess {string} data.res.res_url 资源访问地址
     * @apiSuccessExample {json} 正确实例:
     *
     * {
     * "code": 200,
     * "data": {
     * "res":{
     *   "res_id":1,
     *   "res_name":"",
     *   "res_desc":"",
     *   "res_suffix":"",
     *   "res_thumb":"",
     *   "res_times":"11:01",
     *   "res_url":"",
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