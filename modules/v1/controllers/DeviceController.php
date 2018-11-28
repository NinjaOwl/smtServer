<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;

use app\models\Attachment;
use app\services\auth\AttachmentService;
use app\services\auth\ResService;
use app\tools\OutTools;
use yii\filters\auth\UserAuth;
use yii\web\Controller;


class DeviceController extends Controller
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
     * @api {post}  /v1/device/list  获取设备列表
     * @apiDescription 获取设备列表
     * @apiName /v1/device/list
     * @apiGroup device
     * @apiVersion 3.1.0
     * @apiHeader {String} app_token
     * @apiHeader {String} app_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiParam {String} factory_id  工厂编号
     * @apiParam {String} device_name  设备名称
     * @apiParam {String} max  每页显示条数
     * @apiParam {String} page  页码
     *
     * @apiSampleRequest /v1/device/list
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
     * @apiSuccess {json} data.list.device 设备
     * @apiSuccess {int} data.list.device.device_id 设备编号
     * @apiSuccess {int} data.list.device.device_name 设备名称
     * @apiSuccess {int} data.list.device.device_desc 设备描述
     * @apiSuccess {string} data.list.video 视频
     * @apiSuccess {string} data.list.video_suffix 文件后缀
     * @apiSuccess {string} data.list.video_thumb 缩略图
     * @apiSuccess {string} data.list.video_url 资源访问地址
     * @apiSuccess {string} data.list.video_date 上传时间
     * @apiSuccessExample {json} 正确实例:
     *
     *{
     * "code": 200,
     * "msg": "请求成功",
     * "data": {
     * "list": [
     * {
     * "device": {
     * "device_id": "16",
     * "device_name": "啊啊撒",
     * "device_desc": "阿萨"
     * },
     * "video": {
     * "video_suffix": "mp4",
     * "video_thumb": "http://vod.jiangfw.com/5151419f5bd74c53a85d9c6c783054cd/snapshots/4f4a7d6abf0547259345697ca2c6a311-00001.jpg",
     * "video_url": "http://vod.jiangfw.com/5151419f5bd74c53a85d9c6c783054cd/eaf749c402204dcb959cf81e03fb8a81-214ace77e6fb0e75b16893b6f1a36fd7-ld.mp4",
     * "video_date": "2018.11.28 22:56:08"
     * }
     * }
     * ],
     * "paging": {
     * "count": "12",
     * "page_count": 12,
     * "cur_page": "1",
     * "page_size": "1"
     * }
     * }
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
        $resName = \Yii::$app->request->post('device_name');
        $max = \Yii::$app->request->post('max', 10);
        $page = \Yii::$app->request->post('page', 1);
        $res = $resService->getList2($factoryId, $resName, $max, $page);
        OutTools::outJsonP($res);
    }

    /**
     *
     * @api {post}  /v1/device/get  获取设备资源
     * @apiDescription 获取设备资源
     * @apiName /v1/device/get
     * @apiGroup device
     * @apiVersion 3.1.0
     * @apiHeader {String} app_token
     * @apiHeader {String} app_lang
     * @apiHeader {String} app_type
     * @apiHeader {String} app_version
     * @apiParam {String} res_id  资源编号
     * @apiParam {int} max  每页显示个数
     * @apiParam {int} page  页码
     * @apiSampleRequest /v1/device/get
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
     * @apiSuccess {json[]} data.list 资源列表
     * @apiSuccess {int} data.list.attach_id 资料编号
     * @apiSuccess {int} data.list.attach_name 资料名称
     * @apiSuccess {int} data.list.attach_desc 资料描述
     * @apiSuccess {int} data.list.attach_suffix 资料后缀
     * @apiSuccess {int} data.list.attach_url 资料下载地址
     * @apiSuccess {int} data.list.attach_date 资料上传时间
     * @apiSuccessExample {json} 正确实例:
     *
     * {
     * "code": 200,
     * "msg": "请求成功",
     * "data": {
     * "list": [
     * {
     * "attach_id": "4",
     * "attach_name": "xxxx",
     * "attach_desc": "xxxx",
     * "attach_suffix": "",
     * "attach_url": "http://localhost:93/upload/image/1/AFdXXJZ5ckc2O5B4cFw64xZiHW39GjCJ.flv",
     * "attach_date": "2018.11.25 15:01:29"
     * }
     * ],
     * "paging": {
     * "count": "1",
     * "page_count": 1,
     * "cur_page": 1,
     * "page_size": 10
     * }
     * }
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
        $service = new AttachmentService();
        $resId = \Yii::$app->request->post('res_id');
        $max = \Yii::$app->request->post('max', 10);
        $page = \Yii::$app->request->post('page', 1);
        $res = $service->getList($resId, $max, $page);
        OutTools::outJsonP($res);
    }
}