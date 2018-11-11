<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/10
 * Time: 13:38
 */
namespace app\modules\v1\controllers;


use app\modules\v1\services\UsersService;
use app\tools\Constants;
use app\tools\OutTools;
use yii\web\Controller;


class ApiController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * 判断邀请码是否存在
     */
    public function actionCheckInviteCode()
    {
        $res = ['code' => Constants::ERROR];
        $inviteCode = \Yii::$app->request->get('invite_code');
        if (empty($inviteCode)) {
            $res['msg'] = \Yii::t('app', 'PARAM_LOSE');
        } else {
            $userService = new UsersService();
            $userRes = $userService->getUserByCode($inviteCode);
            if (Constants::isSuccess($userRes)) {
                if (empty($userRes['data'])) {
                    $res['msg'] = \Yii::t('app', 'RECOMMEND_CODE_NOT_EXIST');
                } else {
                    $res['code'] = Constants::SUCCESS;
                }
            } else {
                $res = $userRes;
            }
        }
        echo OutTools::outJson($res);
    }
}