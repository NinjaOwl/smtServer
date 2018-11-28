<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;

use app\services\auth\ResService;
use app\tools\OutTools;
use yii\filters\auth\UserAuth;
use yii\web\Controller;


class ResController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => UserAuth::className(),
            'except' => [],
        ];
        return $behaviors;
    }

    /**
     *
     * @api {post}  /v1/res/list  获取资源列表
     * @apiDescription 获取资源列表
     * @apiName /v1/res/list
     * @apiGroup res
     * @apiVersion 3.1.0
     * @apiHeader {String} app_token
     * @apiHeader {String} app_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiParam {String} factory_id  工厂编号
     * @apiParam {String} res_name  资源名称
     * @apiParam {String} max  每页显示条数
     * @apiParam {String} page  页码
     *
     * @apiSampleRequest /v1/res/list
     * @apiHeaderExample {string} Header-Example:
     *     {
     *       "app_token": "wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3",
     *       "app_lang": "zh",
     *       "app_type": "smt_client",
     *       "app_version": "2.4.7",
     *     }
     * @apiSuccess {String} code 200.
     * @apiSuccess {String} msg 消息
     * @apiSuccess {json} data 数据
     * @apiSuccess {json[]} data.list
     * @apiSuccess {int} data.list.res_id 资源编号
     * @apiSuccess {string} data.list.res_name 资源名称
     * @apiSuccess {string} data.list.res_desc 资源描述
     * @apiSuccess {string} data.list.res_suffix 文件后缀
     * @apiSuccess {string} data.list.res_thumb 缩略图
     * @apiSuccess {string} data.list.res_url 资源访问地址
     * @apiSuccess {string} data.list.res_date 上传时间
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
    public function actionList()
    {
        $resService = new ResService();
        $factoryId = \Yii::$app->request->post('factory_id');
        $resName = \Yii::$app->request->post('res_name');
        $max = \Yii::$app->request->post('max', 10);
        $page = \Yii::$app->request->post('page', 1);
        $res = $resService->getList($factoryId, $resName, $max, $page);
        OutTools::outJsonP($res);
    }

    /**
     *
     * @api {post}  /v1/res/get  获取资源详情
     * @apiDescription 获取资源详情
     * @apiName /v1/res/get
     * @apiGroup res
     * @apiVersion 3.1.0
     * @apiHeader {String} app_token
     * @apiHeader {String} app_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiParam {String} res_id  资源编号
     * @apiSampleRequest /v1/res/get
     * @apiHeaderExample {string} Header-Example:
     *     {
     *       "app_token": "wVNq2Fcg-zXVcKDYRy_vLq7niv-36As3",
     *       "app_lang": "zh",
     *       "app_type": "smt_client",
     *       "app_version": "2.4.7",
     *     }
     * @apiSuccess {String} code 200.
     * @apiSuccess {String} msg 消息
     * @apiSuccess {json} data 数据
     * @apiSuccess {json} data.device 设备
     * @apiSuccess {int} data.device.device_id 设备编号
     * @apiSuccess {string} data.device.device_name 设备名称
     * @apiSuccess {string} data.device.device_desc 设备描述
     * @apiSuccess {json} data.video 视频
     * @apiSuccess {string} data.video.video_suffix 文件后缀
     * @apiSuccess {string} data.video.video_thumb 缩略图
     * @apiSuccess {string} data.video.video_url 资源访问地址
     * @apiSuccess {string} data.video.video_date 上传时间
     * @apiSuccess {json[]} data.attachments
     * @apiSuccess {int} data.attachments.attach_id 资料编号
     * @apiSuccess {int} data.attachments.attach_name 资料名称
     * @apiSuccess {int} data.attachments.attach_desc 资料描述
     * @apiSuccess {int} data.attachments.attach_suffix 资料后缀
     * @apiSuccess {int} data.attachments.attach_url 资料下载地址
     * @apiSuccess {int} data.attachments.attach_date 资料上传时间
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
     *
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
        $resService = new ResService();
        $resId = \Yii::$app->request->post('res_id');
        $res = $resService->get($resId);
        OutTools::outJsonP($res);
    }
}