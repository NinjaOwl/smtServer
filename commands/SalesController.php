<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\modules\v1\models\Channel;
use app\modules\v1\models\ChannelType;
use app\modules\v1\services\UsersService;
use app\modules\wx\services\RegisterApiService;
use app\tools\Constants;
use Yii;
use yii\base\Exception;
use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SalesController extends Controller
{
    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $usersService = new UsersService();
        return $usersService->updateUserInviteCode(1);
    }

    /**
     * 读取CSV文件
     * @Author   li.guobin
     * @DateTime 2016-12-12T16:45:59+0800
     * @return   [type]                   [description]
     */
    public function actionMap($name)
    {
        try {
            //$RegisterApiService= new RegisterApiService();
            /*读取csv文件，组成数组--start*/
            $csvFile = $name;//"E:\phpStudy\WWW\sales2\store.csv" ;
            $redis = Yii::$app->redis;
            if ($redis->get('store_data') == false) {
                if (($handle = fopen($csvFile, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle)) !== FALSE && $data) {
                        $csvArr[] = array(iconv("GB2312", "UTF-8//IGNORE", $data[0]), iconv("GB2312", "UTF-8//IGNORE", $data[1]));
                    }
                    fclose($handle);
                }
                $redis->set("store_data", json_encode($csvArr));
                $redis->expire("store_data", 7200);
            }
            return $redis->get('store_data');
        } catch (Exception $ex) {
            var_dump("读取错误是:" . $ex->getMessage());
        }
    }

    /**
     * 导入功能
     * @Author   li.guobin
     * @DateTime 2016-12-12T16:45:24+0800
     */
    public function actionIns($fileName = "")
    {
        if (empty($fileName)) {
            $fileName = Yii::$app->basePath . "/store_data/store.csv";
        }
        set_time_limit(0);
        try {
            $RegisterApiService = new RegisterApiService();
            $channel_type_id = ChannelType::findOne(['short_name' => 'store'])->type_id;
            $csvArr = json_decode($this->actionMap($fileName));
            $hasError = false;
            if (is_array($csvArr)) {
                $i = 0;
                foreach ($csvArr as $key => $val) {
                    //第一行是标题栏
                    if ($i >= 1) {
                        $name = str_replace(" ", "", $val[0]);
                        $info = Channel::find()->where('name=:name', array(':name' => $name))->one();
                        if (empty($info)) {
                            $positionRes = $RegisterApiService->getPosition($val[1] . $name);
                            $province = $val[1];
                            $city = "";
                            $code = "";
                            if (Constants::isSuccess($positionRes)) {
                                $province = $val[1] ? $val[1] : $positionRes['data']['province'];
                                $city = $positionRes['data']['city'] ? $positionRes['data']['city'] : $city;
                                $city_code = $positionRes['data']['code'] ? $positionRes['data']['code'] : $code;
                                $province_code = substr($city_code, 0, 2) . "0000";
                                $city_code = substr($city_code, 0, 4) . "00";
                                $data1 = array('name' => $name, 'pid' => '0', 'province_code' => $province_code, 'province_name' => $province, 'city_name' => $city, 'city_code' => $city_code, 'channel_type_id' => $channel_type_id);
                                try {
                                    $id = Yii::$app->db->createCommand()->insert(Channel::tableName(), $data1)->execute();
                                } catch (Exception $e) {
                                    echo "1.error{$i} insert failure\n";
                                    $hasError = true;
                                }
                            } else {
                                $hasError = true;
                                echo "2.error {$i} no position\n";
                            }
                        } else {
//                            echo "第{$i}行数据已存在\n";
                        }
                    }
                    $i++;
                }
                echo "3.success\n";
                if (!$hasError) {
                    rename($fileName, $fileName . time());
                }

            }
            return 0;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }

    }

    /**
     * 迁移到组
     */
    public function actionGroup()
    {
        $usersService = new UsersService();
        return $usersService->moveUserToGroup();
    }

    public function actionStatistics($startWeek = 13)
    {
        $sqlSel = "";
        $sumSel = "";
        for ($i = $startWeek; $i <= 52; $i++) {
            if ($i < 52) {
                $sqlSel .= "r.$i,";
                $sumSel .= "sum(case when t.date = $i then t.num else null end) as '$i',";
            } else {
                $sqlSel .= "r.$i";
                $sumSel .= "sum(case when t.date = $i then t.num else null end) as '$i'";
            }
        }
        $sql = <<<HTML
select 
r.user_id,
from_unixtime(u.User_CTime) as c_date,
weekofyear(from_unixtime(u.User_CTime)) as c_week,
$sqlSel
from(
select 
t.user_id,
$sumSel
from
(
select weekofyear(from_unixtime(File_Start_Time)) as date,user_id,count(1) as num  
from  m_ecg_record_r 
where from_unixtime(File_Start_Time)>='2016-4-1' group by date, user_id
) as t group by t.user_id
) as r join m_ecg_user u on u.user_id = r.user_id 
-- where from_unixtime(u.User_CTime)<='2016-1-4'
 order by  u.User_CTime asc
HTML;
        $res = Yii::$app->db->createCommand($sql)->queryAll();
        $retArray = array();
        foreach ($res as $rec) {
            $registerWeek = $rec['c_week'];
            $start = true;
            $beginWeek = null;
            $endWeek = null;
            for ($i = $startWeek; $i <= 52; $i++) {
                if (isset($rec[$i]) && empty($rec[$i]) == false) {
                    if ($start) {
                        $beginWeek = $i;
                        $endWeek = $i;
                        $start = false;
                    } else {
                        $endWeek = $i;
                    }
                }
            }
            if (!isset($retArray[$beginWeek . "_" . $endWeek])) {
                $retArray[$beginWeek . "_" . $endWeek] = 1;
            } else {
                $retArray[$beginWeek . "_" . $endWeek] = $retArray[$beginWeek . "_" . $endWeek] + 1;
            }
        }
        $text = '';
        foreach ($retArray as $rec => $num) {
            $arr = explode('_', $rec);
            $text .= $arr[0] . "," . $arr[1] . "," . $num . "\r\n";
        }
        file_put_contents("d:/3.txt", $text);
    }
}


