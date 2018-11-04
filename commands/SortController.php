<?php 
namespace app\commands;

use app\modules\v1\models\Users;
use app\modules\v1\models\ChannelType;
use app\modules\v1\services\UsersService;
use app\tools\Constants;
use Yii;

use yii\base\Exception;
use yii\console\Controller;
class SortController extends Controller
{
	
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
            if ($redis->get(basename($csvFile)) == false) {
                if (($handle = fopen($csvFile, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle)) !== FALSE && $data) {
                        $csvArr[]=array(iconv("GB2312", "UTF-8//IGNORE", $data[0]), iconv("GB2312", "UTF-8//IGNORE", $data[1]),iconv("GB2312", "UTF-8//IGNORE", $data[2]),iconv("GB2312", "UTF-8//IGNORE", $data[3]),iconv("GB2312", "UTF-8//IGNORE", $data[4]),);                      
                    }
                    fclose($handle);
                }
                $redis->set(basename($csvFile), json_encode($csvArr));
                $redis->expire(basename($csvFile), 120);
            }
            return $redis->get(basename($csvFile));
        } catch (Exception $ex) {
            var_dump("读取错误是:" . $ex->getMessage());
        }
    }
    /**
     * 缓存数据
     * @Author   li.guobin
     * @DateTime 2016-12-21T11:05:39+0800
     * @param    [varchar]                   $name 文件名
     */
    public function getContent($name){
        try {
            //$RegisterApiService= new RegisterApiService();
            /*读取csv文件，组成数组--start*/
            $csvFile = $name;//"E:\phpStudy\WWW\sales2\store.csv" ;
            $redis = Yii::$app->redis;
            // var_dump("====1======");
            // var_dump($redis->get('compare_data'));
            if ($redis->get(basename($csvFile)) == false) {
                if (($handle = fopen($csvFile, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle)) !== FALSE && $data) {
                        $csvArr[]=iconv("GBK", "UTF-8//IGNORE", $data[1]);                      
                    }
                    fclose($handle);
                }
                //var_dump("==2========");
                $redis->set(basename($csvFile), json_encode($csvArr));
                $redis->expire(basename($csvFile), 120);
            }
            return $redis->get(basename($csvFile));
        } catch (Exception $ex) {
            var_dump("读取错误是:" . $ex->getMessage());
        }
    }
    /**
     * 数据筛选
     * @Author   li.guobin
     * @DateTime 2016-12-19T17:03:54+0800
     * @param    $fileName 文件名
     * @return   [type]                   [description]
     */
    public function actionExport($fileName){
        if (empty($fileName)) {
            $fileName = Yii::$app->basePath . "/store_data/name.csv";
        }
        set_time_limit(0);
        try {
            $csvArr = json_decode($this->actionMap($fileName));
            $hasError = false;
            $NewFileName=Yii::$app->basePath . "/store_data/name".date("Ymdhis").".csv";
            $fp=fopen($NewFileName,"w+");
            $info=array();
            $nameArr=array();
            if (is_array($csvArr)) {
                $i = 0;
                foreach ($csvArr as $key => $val) {
                    //第一行是标题栏
                    if ($i >= 1) {
                        $mobile = str_replace(" ", "", $val[3]);
                        if(!$mobile){
                        	 $remark=iconv("UTF-8","GBK","手机号不存在");                        	 
                    	}else{
                        	$info = Users::find()->where('mobile=:mobile', array(':mobile' => $mobile))->one();
                    	}
                       
                         $id=str_replace(" ", "", $val[0]);
                         $name=iconv("UTF-8","GBK",$val[1]);
                         $pid=str_replace(" ", "", $val[2]); 
                        if (empty($info)) {
                               $remark="";
                               //名字全部是英文
                               if(preg_match("/^[A-Za-z]*$/i",$name)){
                               		$remark=iconv("UTF-8","GBK","英文名");
                               }                       
                            //$str .= $id.",".$name.",".$pid.",".$mobile."\n";
                        }else{
                        	 $remark=iconv("UTF-8","GBK","已存在"); 
                        }
                        $data=array($id,$name,$pid,$mobile,$remark);
                        
                    }else{
                    	$data=array(iconv("UTF-8","GBK","编号"),iconv("UTF-8","GBK","姓名"),"pid",iconv("UTF-8","GBK","手机号"),iconv("UTF-8","GBK","备注"));
                    }
                    $i++;
                    fputcsv($fp,$data);
                }                
                fclose($fp);
            }
            return 0;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    /**
     * 数据筛选
     * @Author   li.guobin
     * @DateTime 2016-12-19T17:03:54+0800
     * @param    $fileName 文件名
     * @return   [type]                   [description]
     */
    public function actionExport2($fileName="",$fileName2=""){
        if (empty($fileName)) {
            $fileName = Yii::$app->basePath . "/store_data/newNameLast.csv";
        }
        if (empty($fileName2)) {
            $fileName2 = Yii::$app->basePath . "/store_data/shengrenmin2.csv";
        }
        set_time_limit(0);
        try {
            $csvArr = json_decode($this->actionMap($fileName));
            $mobileArr=json_decode($this->getContent($fileName2));
            //  var_dump($mobileArr);
            // exit;
            $hasError = false;
            $NewFileName=Yii::$app->basePath . "/store_data/newNameLast4.csv";
            $fp=fopen($NewFileName,"w+");
            $info=array();
            $nameArr=array();
            if (is_array($csvArr)) {
                $i = 0;
                foreach ($csvArr as $key => $val) {
                    $remark=$val[4]?iconv("UTF-8","GBK",$val[4]):"";
                    $remark= isset($val[5])?$remark.iconv("UTF-8","GBK",$val[5]):$remark;
                    //第一行是标题栏
                    if ($i >= 1) {
                        $mobile =str_replace(" ", "", $val[3]);
                        if(!$mobile){
                             $remark=iconv("UTF-8","GBK","手机号不存在");                          
                        }else{
                            if( !preg_match("/^1[0-9]{10}$/",$mobile) && $mobile){
                                $mobile=iconv("UTF-8","GBK",$mobile);
                                $remark=iconv("UTF-8","GBK","手机号码格式不正确");
                            }else{                              
                                foreach ($mobileArr as $v) {
                                    if($mobile==$v){
                                        $remark=iconv("UTF-8","GBK","省人民");
                                    }
                                } 
                            }                            
                        } 
                        $id=str_replace(" ", "", $val[0]);
                        $name=iconv("UTF-8","GBK",$val[1]);
                        $testNum=str_replace(" ", "", $val[2]); 
                        
                        $data=array($id,$name,$testNum,$mobile,$remark);
                        
                    }else{
                        $data=array(iconv("UTF-8","GBK",$val[0]),iconv("UTF-8","GBK",$val[1]),iconv("UTF-8","GBK",$val[2]),iconv("UTF-8","GBK",$val[3]),iconv("UTF-8","GBK",$val[4]));
                    }
                    $i++;
                    fputcsv($fp,$data);
                }                
                fclose($fp);
            }
            return 0;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    /**
     * 导出CSV文件
     * @Author   li.guobin
     * @DateTime 2016-12-19T17:34:36+0800
     * @param    [string]                   $filename 文件名
     * @param    [array]                   $data     数据
     */
    /**
 * 导出excel(csv)
 * @data 导出数据
 * @headlist 第一行,列名
 * @fileName 输出Excel文件名
 */
	 public function csv_export($data = array(), $headlist = array(), $fileName) {
	  
	    header('Content-Type: application/vnd.ms-excel');
	    header('Content-Disposition: attachment;filename="'.$fileName.'.csv"');
	    header('Cache-Control: max-age=0');
	  
	    //打开PHP文件句柄,php://output 表示直接输出到浏览器
	    $fp = fopen('php://output', 'a');
	    
	    //输出Excel列名信息
	    foreach ($headlist as $key => $value) {
	        //CSV的Excel支持GBK编码，一定要转换，否则乱码
	        $headlist[$key] = iconv('utf-8', 'gbk', $value);
	    }
	  
	    //将数据通过fputcsv写到文件句柄
	    fputcsv($fp, $headlist);
	    
	    //计数器
	    $num = 0;
	    
	    //每隔$limit行，刷新一下输出buffer，不要太大，也不要太小
	    $limit = 100000;
	    
	    //逐行取出数据，不浪费内存
	    $count = count($data);
	    for ($i = 0; $i < $count; $i++) {
	    
	        $num++;
	        
	        //刷新一下输出buffer，防止由于数据过多造成问题
	        if ($limit == $num) { 
	            ob_flush();
	            flush();
	            $num = 0;
	        }
	        
	        $row = $data[$i];
	        foreach ($row as $key => $value) {
	            $row[$key] = iconv('utf-8', 'gbk', $value);
	        }

	        fputcsv($fp, $row);
	    }
	}
} 