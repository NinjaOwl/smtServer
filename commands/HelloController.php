<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\tools\HttpTools;
use yii\console\Controller;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     */
    public function actionIndex()
    {
//        $jsonArray = <<<HTML
//[{"USER_ID": 14678539517644,"USER_NAME": "18202134101","USER_FULLNAME": "高树根"}, {"USER_ID": 14680404477748,"USER_NAME": "13818612262","USER_FULLNAME": "解克勤"}, {"USER_ID": 14680730857774,"USER_NAME": "13816959762","USER_FULLNAME": "王勇"}, {"USER_ID": 14683117797920,"USER_NAME": "13621754567","USER_FULLNAME": "钟兴发"}, {"USER_ID": 14684234667998,"USER_NAME": "13501835583","USER_FULLNAME": "马恒章"}, {"USER_ID": 14684247478000,"USER_NAME": "18017287655","USER_FULLNAME": "殷薇薇"}, {"USER_ID": 14684292278004,"USER_NAME": "18019086737","USER_FULLNAME": "苏菊"}, {"USER_ID": 14684361278010,"USER_NAME": "13012890392","USER_FULLNAME": "奚日昶"}, {"USER_ID": 14685339308060,"USER_NAME": "13472577243","USER_FULLNAME": "李俊民"}, {"USER_ID": 14686042838096,"USER_NAME": "13701859960","USER_FULLNAME": "张永红"}, {"USER_ID": 14688273848164,"USER_NAME": "18918190736","USER_FULLNAME": "金继文"}, {"USER_ID": 14688301568180,"USER_NAME": "15618688519","USER_FULLNAME": "倪俊飞"}, {"USER_ID": 14692371928424,"USER_NAME": "13601925531","USER_FULLNAME": "徐文明"}, {"USER_ID": 14692698828438,"USER_NAME": "13817383170","USER_FULLNAME": "赵福根"}, {"USER_ID": 14693228278446,"USER_NAME": "13390970353","USER_FULLNAME": "徐立德"}, {"USER_ID": 14694288068502,"USER_NAME": "18621976658","USER_FULLNAME": "郭德慈"}, {"USER_ID": 14696720368602,"USER_NAME": "15800414121","USER_FULLNAME": "常中林"}, {"USER_ID": 14701907928814,"USER_NAME": "13564611307","USER_FULLNAME": "春香"}, {"USER_ID": 14702222188838,"USER_NAME": "18930333976","USER_FULLNAME": "邓伯明"}, {"USER_ID": 14702816598856,"USER_NAME": "13916835345","USER_FULLNAME": "尚月玲"}, {"USER_ID": 14705268698958,"USER_NAME": "13818034713","USER_FULLNAME": "周新林"}, {"USER_ID": 14706389699010,"USER_NAME": "13816471731","USER_FULLNAME": "王秀丽"}, {"USER_ID": 14707112919038,"USER_NAME": "13918155734","USER_FULLNAME": "赵麟"}, {"USER_ID": 14707304869044,"USER_NAME": "13917522537","USER_FULLNAME": "吴祖勤"}, {"USER_ID": 14707629889050,"USER_NAME": "17701850551","USER_FULLNAME": "朱菊生"}, {"USER_ID": 14707873349052,"USER_NAME": "13002137374","USER_FULLNAME": "何少华"}, {"USER_ID": 14710546299238,"USER_NAME": "13621726135","USER_FULLNAME": "陈利明"}, {"USER_ID": 14712146139346,"USER_NAME": "13585833911","USER_FULLNAME": "张雪松"}, {"USER_ID": 14713306769450,"USER_NAME": "18918175127","USER_FULLNAME": "承瑞英"}, {"USER_ID": 14713404519468,"USER_NAME": "13817276303","USER_FULLNAME": "黄明"}, {"USER_ID": 14713973639492,"USER_NAME": "13817024996","USER_FULLNAME": "沈秀英"}, {"USER_ID": 14714146609510,"USER_NAME": "13817774368","USER_FULLNAME": "徐宝苏"}, {"USER_ID": 14715042449668,"USER_NAME": "18916049612","USER_FULLNAME": "周才萍"}, {"USER_ID": 14716675759744,"USER_NAME": "18052574338","USER_FULLNAME": "姚定祥"}, {"USER_ID": 14717993119808,"USER_NAME": "13917482853","USER_FULLNAME": "纪海元"}, {"USER_ID": 14719193109864,"USER_NAME": "18721591950","USER_FULLNAME": "邵惠珍"}, {"USER_ID": 14719379469876,"USER_NAME": "13916474983","USER_FULLNAME": "左玉俊"}, {"USER_ID": 14719470559894,"USER_NAME": "15351662703","USER_FULLNAME": "孙小伟"}, {"USER_ID": 14732880400590,"USER_NAME": "18016425292","USER_FULLNAME": "戴鑫"}, {"USER_ID": 14732965310596,"USER_NAME": "13003240739","USER_FULLNAME": "陆田芙"}, {"USER_ID": 14735953720780,"USER_NAME": "13761217974","USER_FULLNAME": "孟美玲"}, {"USER_ID": 14735976080782,"USER_NAME": "18930383681","USER_FULLNAME": "方金根"}, {"USER_ID": 14744268271252,"USER_NAME": "18918213667","USER_FULLNAME": "常超"}, {"USER_ID": 14744511351268,"USER_NAME": "13701779774","USER_FULLNAME": "朱丽珍"}, {"USER_ID": 14745174471298,"USER_NAME": "13601605335","USER_FULLNAME": "陆永伟"}, {"USER_ID": 14745368301334,"USER_NAME": "13816192166","USER_FULLNAME": "钱林娣"}, {"USER_ID": 14752143711818,"USER_NAME": "13761774430","USER_FULLNAME": "肖兆娣"}, {"USER_ID": 14764960362416,"USER_NAME": "13641838674","USER_FULLNAME": "刘德才"}]
//HTML;
        $jsonArray = <<<HTML
[{"User_ID": 31983,"User_Name": "13001084028","User_FullName": "宋银峰"}, {"User_ID": 44969,"User_Name": "18335791111","User_FullName": "卫琴琴"}, {"User_ID": 51582,"User_Name": "13611560321","User_FullName": "濮杰"}, {"User_ID": 51826,"User_Name": "13951910092","User_FullName": "吴"}, {"User_ID": 51856,"User_Name": "13851990990","User_FullName": "刘安平"}, {"User_ID": 52668,"User_Name": "15077827742","User_FullName": "邵开友"}, {"User_ID": 53980,"User_Name": "18611736919","User_FullName": "汪涵"}, {"User_ID": 54666,"User_Name": "13501076160","User_FullName": "发哥"}, {"User_ID": 55524,"User_Name": "18118806613","User_FullName": "翟明伟"}, {"User_ID": 55638,"User_Name": "13671825604","User_FullName": "刘伟"}, {"User_ID": 56264,"User_Name": "13057523599","User_FullName": "沙祥宝"}, {"User_ID": 56340,"User_Name": "13770941505","User_FullName": "钱锦利"}, {"User_ID": 56420,"User_Name": "15856766685","User_FullName": "韩宗文"}, {"User_ID": 56432,"User_Name": "13910321872","User_FullName": "佟伟栋"}, {"User_ID": 56440,"User_Name": "13661383894","User_FullName": "yaoyao"}, {"User_ID": 56584,"User_Name": "18520201590","User_FullName": "wurunkai"}, {"User_ID": 56794,"User_Name": "13951892256","User_FullName": "王斌"}, {"User_ID": 56846,"User_Name": "13910612952","User_FullName": "沈德威"}, {"User_ID": 57096,"User_Name": "18029760733","User_FullName": "daa"}, {"User_ID": 57222,"User_Name": "13851357285","User_FullName": "孙荣"}, {"User_ID": 57990,"User_Name": "13505128128","User_FullName": "王振风"}, {"User_ID": 58240,"User_Name": "18061698513","User_FullName": "莫建芬"}, {"User_ID": 58366,"User_Name": "13705501108","User_FullName": "章学明"}, {"User_ID": 58446,"User_Name": "15850688705","User_FullName": "刘春青"}, {"User_ID": 58516,"User_Name": "13962295697","User_FullName": "陈凤宝"}, {"User_ID": 58622,"User_Name": "13813535228","User_FullName": "汤韵翠"}, {"User_ID": 59132,"User_Name": "13064859966","User_FullName": "尤金东"}, {"User_ID": 59568,"User_Name": "18949690920","User_FullName": "代冠美"}, {"User_ID": 59630,"User_Name": "13951980565","User_FullName": "许凤英"}, {"User_ID": 59646,"User_Name": "13905177672","User_FullName": "陈乃友"}, {"User_ID": 59658,"User_Name": "13961607020","User_FullName": "诸建平"}, {"User_ID": 59694,"User_Name": "13906150612","User_FullName": "谢振华"}, {"User_ID": 59702,"User_Name": "13584602893","User_FullName": "许金秀"}, {"User_ID": 59724,"User_Name": "13914787595","User_FullName": "蒋元龙"}, {"User_ID": 59736,"User_Name": "18951369898","User_FullName": "肖西林"}, {"User_ID": 59746,"User_Name": "15152868099","User_FullName": "张士潭"}, {"User_ID": 59748,"User_Name": "15951832120","User_FullName": "张红英"}, {"User_ID": 59750,"User_Name": "13955096433","User_FullName": "王维伦"}, {"User_ID": 59778,"User_Name": "13814005408","User_FullName": "孔凤莲"}, {"User_ID": 59784,"User_Name": "13913888103","User_FullName": "周利民"}, {"User_ID": 59806,"User_Name": "15805170037","User_FullName": "陈洪武"}, {"User_ID": 59814,"User_Name": "18118850089","User_FullName": "李庆云"}, {"User_ID": 59836,"User_Name": "18752553286","User_FullName": "陈金于"}, {"User_ID": 59864,"User_Name": "13852257540","User_FullName": "孙正月"}, {"User_ID": 59874,"User_Name": "13776623635","User_FullName": "洪西新"}, {"User_ID": 59928,"User_Name": "13861380002","User_FullName": "彭芳辉"}, {"User_ID": 60006,"User_Name": "13901420379","User_FullName": "王圣宽"}, {"User_ID": 60026,"User_Name": "13852296205","User_FullName": "徐文华"}, {"User_ID": 60060,"User_Name": "13775401121","User_FullName": "冯銮英"}, {"User_ID": 60064,"User_Name": "13505538866","User_FullName": "苏化敏"}, {"User_ID": 60082,"User_Name": "17714307077","User_FullName": "胡成仙"}, {"User_ID": 60094,"User_Name": "18673416776","User_FullName": "湖斌"}, {"User_ID": 60098,"User_Name": "13851625718","User_FullName": "孟军"}, {"User_ID": 60156,"User_Name": "13915982232","User_FullName": "时训怀"}, {"User_ID": 60242,"User_Name": "15152576203","User_FullName": "杨成芳"}, {"User_ID": 60286,"User_Name": "15950496969","User_FullName": "张瑞"}, {"User_ID": 60294,"User_Name": "13801569263","User_FullName": "张琴"}, {"User_ID": 60306,"User_Name": "15319456066","User_FullName": "李海成"}, {"User_ID": 60374,"User_Name": "13705638008","User_FullName": "陶为海"}, {"User_ID": 60378,"User_Name": "13815466516","User_FullName": "谌继诗"}, {"User_ID": 60488,"User_Name": "13861959182","User_FullName": "ghj"}, {"User_ID": 60644,"User_Name": "13951702391","User_FullName": "许安福"}, {"User_ID": 60656,"User_Name": "13775850550","User_FullName": "沙跃"}, {"User_ID": 60728,"User_Name": "13770690704","User_FullName": "常声元"}, {"User_ID": 60756,"User_Name": "18913913589","User_FullName": "曹瑞娟"}, {"User_ID": 60760,"User_Name": "18951522121","User_FullName": "陈以环"}, {"User_ID": 60766,"User_Name": "18951730840","User_FullName": "唐翠红"}, {"User_ID": 60844,"User_Name": "15251728672","User_FullName": "衣文斌"}, {"User_ID": 60900,"User_Name": "13615266469","User_FullName": "马玮煜"}, {"User_ID": 60904,"User_Name": "13814526472","User_FullName": "董光玉"}, {"User_ID": 61042,"User_Name": "15301592908","User_FullName": "许建"}, {"User_ID": 61174,"User_Name": "15190912591","User_FullName": "樊祥兴"}, {"User_ID": 61296,"User_Name": "15950556815","User_FullName": "牛庆芬"}, {"User_ID": 61338,"User_Name": "13913439966","User_FullName": "崔秉春"}, {"User_ID": 61346,"User_Name": "17755312571","User_FullName": "娄有恒"}, {"User_ID": 61414,"User_Name": "13905240228","User_FullName": "王保华"}, {"User_ID": 61428,"User_Name": "13813815764","User_FullName": "单巧萍"}, {"User_ID": 61460,"User_Name": "13952190026","User_FullName": "王道法"}, {"User_ID": 61510,"User_Name": "13951853252","User_FullName": "张家勇"}, {"User_ID": 61514,"User_Name": "13776619257","User_FullName": "张文秀"}, {"User_ID": 61520,"User_Name": "13705160358","User_FullName": "尚武"}, {"User_ID": 61522,"User_Name": "18251999511","User_FullName": "王春新"}, {"User_ID": 61610,"User_Name": "13960618268","User_FullName": "赵文伟"}, {"User_ID": 61842,"User_Name": "13605554966","User_FullName": "朱敏生"}, {"User_ID": 61864,"User_Name": "14752900713","User_FullName": "耿立芹"}, {"User_ID": 61900,"User_Name": "13912196008","User_FullName": "李慧楠"}, {"User_ID": 61956,"User_Name": "13505174112","User_FullName": "万新炎"}, {"User_ID": 62036,"User_Name": "13951694431","User_FullName": "王东平"}, {"User_ID": 62074,"User_Name": "13912902902","User_FullName": "孙岳庆"}, {"User_ID": 62144,"User_Name": "13965645599","User_FullName": "刘金芳"}, {"User_ID": 62146,"User_Name": "13327708050","User_FullName": "黄柯"}, {"User_ID": 62148,"User_Name": "13585207280","User_FullName": "王震晨"}, {"User_ID": 62164,"User_Name": "18061222240","User_FullName": "王坚宝"}, {"User_ID": 62304,"User_Name": "13584703708","User_FullName": "夏世美"}, {"User_ID": 62318,"User_Name": "13951601036","User_FullName": "陈杰"}, {"User_ID": 62344,"User_Name": "18626486303","User_FullName": "刘玉龙"}, {"User_ID": 62412,"User_Name": "15252367605","User_FullName": "吴立兵"}, {"User_ID": 62414,"User_Name": "18951658968","User_FullName": "王正永"}, {"User_ID": 62418,"User_Name": "18036955168","User_FullName": "周新亚"}, {"User_ID": 62444,"User_Name": "13805169167","User_FullName": "樊淑清"}, {"User_ID": 62460,"User_Name": "13338616881","User_FullName": "陈菊华"}, {"User_ID": 62468,"User_Name": "18365278396","User_FullName": "曹丽丽"}, {"User_ID": 62574,"User_Name": "13866964020","User_FullName": "张永才"}, {"User_ID": 62592,"User_Name": "13851371511","User_FullName": "周立娟"}, {"User_ID": 62634,"User_Name": "18551642709","User_FullName": "张燕"}, {"User_ID": 62638,"User_Name": "13809013313","User_FullName": "吴健勇"}, {"User_ID": 62660,"User_Name": "18936875118","User_FullName": "曹桂霞"}, {"User_ID": 62662,"User_Name": "18151676606","User_FullName": "曹桂霞"}, {"User_ID": 62770,"User_Name": "15152963287","User_FullName": "黄兆林"}, {"User_ID": 62776,"User_Name": "18912963526","User_FullName": "王淑云"}, {"User_ID": 62778,"User_Name": "13675293335","User_FullName": "白秀兰"}, {"User_ID": 62780,"User_Name": "18662758166","User_FullName": "张玲玲"}, {"User_ID": 62808,"User_Name": "18913854632","User_FullName": "吕飞"}, {"User_ID": 62858,"User_Name": "15358198710","User_FullName": "严富琴"}, {"User_ID": 62868,"User_Name": "13951795530","User_FullName": "吴志勇"}, {"User_ID": 62884,"User_Name": "15962042233","User_FullName": "唐明"}, {"User_ID": 62890,"User_Name": "17768535691","User_FullName": "孙彩萍"}, {"User_ID": 62896,"User_Name": "13951902756","User_FullName": "吴福水"}, {"User_ID": 62910,"User_Name": "13905282602","User_FullName": "陈和君"}, {"User_ID": 62938,"User_Name": "15152497696","User_FullName": "王心太"}, {"User_ID": 62972,"User_Name": "13952602826","User_FullName": "杨秀娟"}, {"User_ID": 63014,"User_Name": "18913966499","User_FullName": "何静华"}, {"User_ID": 63316,"User_Name": "13951162908","User_FullName": "任建明"}, {"User_ID": 63318,"User_Name": "13605198028","User_FullName": "孙道安"}, {"User_ID": 63336,"User_Name": "13951825659","User_FullName": "张爱萍"}, {"User_ID": 63384,"User_Name": "13905182051","User_FullName": "张维"}, {"User_ID": 63390,"User_Name": "13605142951","User_FullName": "童可夫"}, {"User_ID": 63406,"User_Name": "13913301143","User_FullName": "李想"}, {"User_ID": 63412,"User_Name": "13705122299","User_FullName": "朱建华"}, {"User_ID": 63438,"User_Name": "13327832589","User_FullName": "林洪根"}, {"User_ID": 63462,"User_Name": "15063532910","User_FullName": "黄启勇"}, {"User_ID": 63494,"User_Name": "18451671050","User_FullName": "王玲"}, {"User_ID": 63504,"User_Name": "15896404349","User_FullName": "潘汉金"}, {"User_ID": 63548,"User_Name": "18851185855","User_FullName": "常建华"}, {"User_ID": 63550,"User_Name": "13901533610","User_FullName": "陈学祥"}, {"User_ID": 63628,"User_Name": "13861603302","User_FullName": "夏振伟"}, {"User_ID": 63716,"User_Name": "13062954588","User_FullName": "李祥芝"}, {"User_ID": 63750,"User_Name": "15995180996","User_FullName": "唐海洋"}, {"User_ID": 63830,"User_Name": "13605179270","User_FullName": "徐学文"}, {"User_ID": 63842,"User_Name": "13601324815","User_FullName": "成开程"}, {"User_ID": 63856,"User_Name": "13062517027","User_FullName": "黄勇"}, {"User_ID": 63882,"User_Name": "13601467277","User_FullName": "徐学文"}, {"User_ID": 63886,"User_Name": "18351879279","User_FullName": "徐学文"}, {"User_ID": 63926,"User_Name": "13813854982","User_FullName": "李惠fen"}, {"User_ID": 63962,"User_Name": "13809096856","User_FullName": "汤学华"}, {"User_ID": 63990,"User_Name": "13016976516","User_FullName": "李银芝"}, {"User_ID": 64022,"User_Name": "13365232583","User_FullName": "赵红平"}, {"User_ID": 64024,"User_Name": "13951940076","User_FullName": "陈国亮"}, {"User_ID": 64068,"User_Name": "13770937061","User_FullName": "谷晓华"}, {"User_ID": 64114,"User_Name": "13814456911","User_FullName": "唐爱祥"}, {"User_ID": 64226,"User_Name": "13913983500","User_FullName": "卢俊生"}, {"User_ID": 64230,"User_Name": "13851493138","User_FullName": "陶立华"}, {"User_ID": 64238,"User_Name": "13815967789","User_FullName": "葛新民"}, {"User_ID": 64338,"User_Name": "17773305345","User_FullName": "喻娟"}, {"User_ID": 64440,"User_Name": "15195072920","User_FullName": "吕淑君"}, {"User_ID": 64508,"User_Name": "18262724598","User_FullName": "汪志强"}, {"User_ID": 64516,"User_Name": "13915900388","User_FullName": "陈长兰"}, {"User_ID": 64680,"User_Name": "13951830565","User_FullName": "侯玉红"}, {"User_ID": 64714,"User_Name": "13815995308","User_FullName": "周鸣斋"}, {"User_ID": 64938,"User_Name": "18936039025","User_FullName": "刘永菊"}, {"User_ID": 64976,"User_Name": "13951606177","User_FullName": "张连晓"}, {"User_ID": 65010,"User_Name": "13952636330","User_FullName": "范秀娣"}, {"User_ID": 65026,"User_Name": "15996248381","User_FullName": "金淑梅"}, {"User_ID": 65048,"User_Name": "15195758669","User_FullName": "邢德培"}, {"User_ID": 65054,"User_Name": "15811172773","User_FullName": "小兵"}, {"User_ID": 65056,"User_Name": "13813086550","User_FullName": "孙永培"}, {"User_ID": 65130,"User_Name": "13951869699","User_FullName": "汤承锋"}, {"User_ID": 65132,"User_Name": "13851860831","User_FullName": "张碧华"}, {"User_ID": 65140,"User_Name": "13961039436","User_FullName": "陈根荣"}, {"User_ID": 65216,"User_Name": "13806253660","User_FullName": "杨庆明"}, {"User_ID": 65220,"User_Name": "13961001882","User_FullName": "王亚丽"}, {"User_ID": 65234,"User_Name": "18955517171","User_FullName": "吴平"}, {"User_ID": 65514,"User_Name": "13905165485","User_FullName": "李明"}, {"User_ID": 65522,"User_Name": "15705260175","User_FullName": "刘巧云"}, {"User_ID": 65554,"User_Name": "17702503851","User_FullName": "薛璜"}, {"User_ID": 65620,"User_Name": "18252924999","User_FullName": "姜马祥"}, {"User_ID": 65680,"User_Name": "18552703336","User_FullName": "周修强"}, {"User_ID": 65978,"User_Name": "13813823328","User_FullName": "曾顺清"}, {"User_ID": 65986,"User_Name": "13961241572","User_FullName": "丁秀凤"}, {"User_ID": 66000,"User_Name": "13611509336","User_FullName": "张娟"}, {"User_ID": 66088,"User_Name": "18651161642","User_FullName": "王鑫元"}, {"User_ID": 66168,"User_Name": "13915860231","User_FullName": "丁秀凤"}, {"User_ID": 66228,"User_Name": "13004086136","User_FullName": "殷凯"}, {"User_ID": 66240,"User_Name": "13338957709","User_FullName": "吴正广"}, {"User_ID": 66254,"User_Name": "13901560399","User_FullName": "谷艮之"}, {"User_ID": 66262,"User_Name": "13813247227","User_FullName": "王大云"}, {"User_ID": 66298,"User_Name": "18651897751","User_FullName": "江运桃"}, {"User_ID": 66302,"User_Name": "18963602173","User_FullName": "许爱敏"}, {"User_ID": 66382,"User_Name": "15152624711","User_FullName": "蒋龙凤"}, {"User_ID": 66400,"User_Name": "15305181065","User_FullName": "赵雄美"}, {"User_ID": 66422,"User_Name": "18755783025","User_FullName": "许爱敏"}, {"User_ID": 66494,"User_Name": "18014808343","User_FullName": "金淑梅"}, {"User_ID": 66528,"User_Name": "13815968636","User_FullName": "张文景"}, {"User_ID": 66646,"User_Name": "15951616919","User_FullName": "陈保华"}, {"User_ID": 66670,"User_Name": "13670907072","User_FullName": "苏兆荣"}, {"User_ID": 66696,"User_Name": "13815606699","User_FullName": "刘恩彩"}, {"User_ID": 66988,"User_Name": "13775085161","User_FullName": "刘雪玉"}, {"User_ID": 67098,"User_Name": "13305160088","User_FullName": "陶顺生"}, {"User_ID": 67310,"User_Name": "13813951356","User_FullName": "郭鲁明"}, {"User_ID": 67346,"User_Name": "13951980879","User_FullName": "于泽滨"}, {"User_ID": 67376,"User_Name": "13913829998","User_FullName": "何文霞"}, {"User_ID": 67400,"User_Name": "18662084736","User_FullName": "何恺"}, {"User_ID": 67584,"User_Name": "13915961516","User_FullName": "李林桢"}, {"User_ID": 67716,"User_Name": "18936022066","User_FullName": "陶其胜"}, {"User_ID": 67888,"User_Name": "15895951928","User_FullName": "涂静"}, {"User_ID": 67934,"User_Name": "13851757281","User_FullName": "潘宁松"}, {"User_ID": 68006,"User_Name": "18951970786","User_FullName": "薛从海"}, {"User_ID": 68156,"User_Name": "13914721265","User_FullName": "万立新"}, {"User_ID": 68212,"User_Name": "13805245878","User_FullName": "高慎亮"}, {"User_ID": 68216,"User_Name": "18512525093","User_FullName": "谢佳东"}, {"User_ID": 68236,"User_Name": "13813906033","User_FullName": "夏耘"}, {"User_ID": 68446,"User_Name": "18056201590","User_FullName": "陈远"}, {"User_ID": 68552,"User_Name": "13951700643","User_FullName": "王千梅"}, {"User_ID": 68564,"User_Name": "13605182498","User_FullName": "王炼"}, {"User_ID": 68568,"User_Name": "13645139595","User_FullName": "徐建龙"}, {"User_ID": 68638,"User_Name": "13913958812","User_FullName": "雷正中"}, {"User_ID": 68644,"User_Name": "13057575557","User_FullName": "李炜曦"}, {"User_ID": 68692,"User_Name": "15952090806","User_FullName": "姜祯祯"}, {"User_ID": 68736,"User_Name": "13914413508","User_FullName": "李瑶勤"}, {"User_ID": 68756,"User_Name": "13921268361","User_FullName": "庞玉珍"}, {"User_ID": 68818,"User_Name": "13851994604","User_FullName": "侯百顺"}, {"User_ID": 69690,"User_Name": "13770565370","User_FullName": "温智成"}, {"User_ID": 69796,"User_Name": "13372069158","User_FullName": "张佩富"}, {"User_ID": 69804,"User_Name": "13901590910","User_FullName": "顾惠芬"}, {"User_ID": 69808,"User_Name": "18752530573","User_FullName": "李俊"}, {"User_ID": 69856,"User_Name": "15996254976","User_FullName": "高静"}, {"User_ID": 69874,"User_Name": "18365584695","User_FullName": "霍忠敏"}, {"User_ID": 70112,"User_Name": "18205198632","User_FullName": "孙玉保"}, {"User_ID": 70128,"User_Name": "18936877368","User_FullName": "刘楚榕"}, {"User_ID": 70188,"User_Name": "13505230898","User_FullName": "陈伏田"}, {"User_ID": 70226,"User_Name": "18951982174","User_FullName": "蒋玉萍"}, {"User_ID": 70230,"User_Name": "18913936595","User_FullName": "夏蓉"}, {"User_ID": 70322,"User_Name": "18068862121","User_FullName": "陈刚"}, {"User_ID": 70398,"User_Name": "13711505931","User_FullName": "曲宏达"}, {"User_ID": 70704,"User_Name": "18915929998","User_FullName": "施明峰"}, {"User_ID": 70924,"User_Name": "13813092651","User_FullName": "王桂生"}, {"User_ID": 71298,"User_Name": "15385266829","User_FullName": "王影"}, {"User_ID": 71304,"User_Name": "13955070937","User_FullName": "廖永萍"}, {"User_ID": 71392,"User_Name": "15056520220","User_FullName": "陈松涛"}, {"User_ID": 71572,"User_Name": "15189193939","User_FullName": "张爱华"}, {"User_ID": 71602,"User_Name": "13912048144","User_FullName": "赵志董"}, {"User_ID": 71714,"User_Name": "15255512022","User_FullName": "王和萱"}, {"User_ID": 71890,"User_Name": "13767944120","User_FullName": "李鸿"}, {"User_ID": 71934,"User_Name": "13951667257","User_FullName": "齐素玲"}, {"User_ID": 72012,"User_Name": "15996721788","User_FullName": "巩延军"}, {"User_ID": 72036,"User_Name": "13924266262","User_FullName": "黄海标"}, {"User_ID": 72058,"User_Name": "15250771596","User_FullName": "陶亚"}, {"User_ID": 72166,"User_Name": "13925099749","User_FullName": "李耀枢"}, {"User_ID": 72364,"User_Name": "13852663296","User_FullName": "周爱云"}, {"User_ID": 72490,"User_Name": "15252697331","User_FullName": "陆爱琴"}, {"User_ID": 72570,"User_Name": "13901591477","User_FullName": "栾容"}, {"User_ID": 72584,"User_Name": "13001728890","User_FullName": "栾兆坤"}, {"User_ID": 72590,"User_Name": "13675167311","User_FullName": "孙桂秀"}, {"User_ID": 72630,"User_Name": "13878502848","User_FullName": "张泽业"}, {"User_ID": 72632,"User_Name": "13822966362","User_FullName": "周惠强"}, {"User_ID": 72934,"User_Name": "13357723189","User_FullName": "沈庆利"}, {"User_ID": 72988,"User_Name": "15106145126","User_FullName": "张凤仙"}, {"User_ID": 73176,"User_Name": "13913394149","User_FullName": "费明翠"}, {"User_ID": 73590,"User_Name": "15715617179","User_FullName": "崔秀云"}, {"User_ID": 73706,"User_Name": "13852969916","User_FullName": "张梅风"}, {"User_ID": 73726,"User_Name": "15996006668","User_FullName": "王立国"}, {"User_ID": 73934,"User_Name": "15298513813","User_FullName": "戴中琴"}, {"User_ID": 73996,"User_Name": "13970570207","User_FullName": "罗江卫"}, {"User_ID": 74018,"User_Name": "13906143206","User_FullName": "李荣宪"}, {"User_ID": 74140,"User_Name": "18795856459","User_FullName": "唐一凡"}, {"User_ID": 74154,"User_Name": "18056201545","User_FullName": "陈险峰"}, {"User_ID": 74284,"User_Name": "13814028223","User_FullName": "吴建平"}, {"User_ID": 74374,"User_Name": "13451853805","User_FullName": "陈乐仁"}, {"User_ID": 74462,"User_Name": "13852608266","User_FullName": "龚仁鹏"}, {"User_ID": 74466,"User_Name": "13914409950","User_FullName": "龚仁春"}, {"User_ID": 74840,"User_Name": "18012326366","User_FullName": "贾玉平"}, {"User_ID": 74902,"User_Name": "15295730536","User_FullName": "罗荣娣"}, {"User_ID": 74904,"User_Name": "13951148918","User_FullName": "高士义"}, {"User_ID": 74922,"User_Name": "13705150772","User_FullName": "赵明德"}, {"User_ID": 74930,"User_Name": "13901586403","User_FullName": "周景山"}, {"User_ID": 74940,"User_Name": "13801471906","User_FullName": "陈骁军"}, {"User_ID": 75138,"User_Name": "13913854238","User_FullName": "韩维林"}, {"User_ID": 75178,"User_Name": "13359038159","User_FullName": "代冠美"}, {"User_ID": 14536873953322,"User_Name": "13611511699","User_FullName": "陈坚"}, {"User_ID": 14542956053504,"User_Name": "15823857469","User_FullName": "柯俊"}, {"User_ID": 14544650673522,"User_Name": "18082269488","User_FullName": "魏星"}, {"User_ID": 14552041083530,"User_Name": "15353114996","User_FullName": "郭飞航"}, {"User_ID": 14557837393556,"User_Name": "18203921120","User_FullName": "焦尚书"}, {"User_ID": 14561327363586,"User_Name": "13718376805","User_FullName": "刘丽岩"}, {"User_ID": 14581866913630,"User_Name": "13942030108","User_FullName": "董振宇"}, {"User_ID": 14603414053662,"User_Name": "18805040000","User_FullName": "lotto了"}, {"User_ID": 14604527283704,"User_Name": "15009444098","User_FullName": "李延福"}, {"User_ID": 14610469703780,"User_Name": "13909549058","User_FullName": "陈兆让"}, {"User_ID": 14610587213786,"User_Name": "13409540928","User_FullName": "宋克霞"}, {"User_ID": 14611230713816,"User_Name": "18741693355","User_FullName": "张秀玲"}, {"User_ID": 14611337063940,"User_Name": "13703525956","User_FullName": "郭丕珍"}, {"User_ID": 14611403233970,"User_Name": "18652078126","User_FullName": "查倩"}, {"User_ID": 14611405414000,"User_Name": "15161993927","User_FullName": "高云龙"}, {"User_ID": 14614053944182,"User_Name": "13951898009","User_FullName": "夏春阳"}, {"User_ID": 14614055554184,"User_Name": "15305182893","User_FullName": "胡成仙"}, {"User_ID": 14616508514218,"User_Name": "13505193638","User_FullName": "叶明亿"}, {"User_ID": 14616560734228,"User_Name": "13701408061","User_FullName": "张绍洲"}, {"User_ID": 14617220564240,"User_Name": "15640641057","User_FullName": "韩淑芬"}, {"User_ID": 14617244594248,"User_Name": "17751845678","User_FullName": "刘洋"}, {"User_ID": 14618123024272,"User_Name": "13851780805","User_FullName": "王小庆"}, {"User_ID": 14618129944300,"User_Name": "13913893147","User_FullName": "刘达人123456"}, {"User_ID": 14622625114534,"User_Name": "18981320891","User_FullName": "杜劲"}, {"User_ID": 14622787934580,"User_Name": "13905262435","User_FullName": "姚扣宝"}, {"User_ID": 14622790934584,"User_Name": "13813985838","User_FullName": "李晓桐"}, {"User_ID": 14622891954594,"User_Name": "18962640501","User_FullName": "姚建岳"}, {"User_ID": 14623149064602,"User_Name": "15805177742","User_FullName": "田田"}, {"User_ID": 14623281994620,"User_Name": "13505182796","User_FullName": "胡永生"}, {"User_ID": 14623426034650,"User_Name": "17000108928","User_FullName": "磨磨唧唧"}, {"User_ID": 14624228914704,"User_Name": "15850886699","User_FullName": "王曙光"}, {"User_ID": 14624308264754,"User_Name": "15950366815","User_FullName": "王红"}, {"User_ID": 14625004194808,"User_Name": "15951269310","User_FullName": "徐前勇"}, {"User_ID": 14627941664932,"User_Name": "15876399378","User_FullName": "全尧卿"}, {"User_ID": 14629401675004,"User_Name": "18786707914","User_FullName": "去去去w"}, {"User_ID": 14639051515502,"User_Name": "13805242305","User_FullName": "苏永平"}, {"User_ID": 14639244965522,"User_Name": "13401222098","User_FullName": "曹乃明"}, {"User_ID": 14645210975790,"User_Name": "17714578059","User_FullName": "李晓辉"}, {"User_ID": 14645814135814,"User_Name": "13512518040","User_FullName": "熊正红"}, {"User_ID": 14648035565918,"User_Name": "13913929848","User_FullName": "余奇林"}, {"User_ID": 14648338555930,"User_Name": "13906142611","User_FullName": "罗晓平"}, {"User_ID": 14649227405982,"User_Name": "18915173070","User_FullName": "施展"}, {"User_ID": 14650138176144,"User_Name": "13962422888","User_FullName": "李向阳"}, {"User_ID": 14652141426316,"User_Name": "13852519169","User_FullName": "王学荣"}, {"User_ID": 14652274346342,"User_Name": "18751802866","User_FullName": "夏茂梁"}, {"User_ID": 14658712566662,"User_Name": "15949145968","User_FullName": "陈其芳"}, {"User_ID": 14659596006700,"User_Name": "13912993843","User_FullName": "葛隆华"}, {"User_ID": 14659631516708,"User_Name": "13809041208","User_FullName": "李明"}, {"User_ID": 14665978967066,"User_Name": "13776671779","User_FullName": "龚子研"}, {"User_ID": 14669238897262,"User_Name": "13912592619","User_FullName": "董栋善"}, {"User_ID": 14669500897298,"User_Name": "15996010958","User_FullName": "丁洁"}, {"User_ID": 14670167637336,"User_Name": "18956499968","User_FullName": "程浩然"}, {"User_ID": 14671163217374,"User_Name": "13851841669","User_FullName": "王宁"}, {"User_ID": 14676182057568,"User_Name": "15150642313","User_FullName": "史波良"}, {"User_ID": 14678709067660,"User_Name": "13675213062","User_FullName": "李友之"}, {"User_ID": 14681563657810,"User_Name": "18360978408","User_FullName": "陈中林"}, {"User_ID": 14681585727812,"User_Name": "18752504727","User_FullName": "孙桂华"}, {"User_ID": 14682084647830,"User_Name": "13951844782","User_FullName": "邵培刚"}, {"User_ID": 14682294127858,"User_Name": "13921405136","User_FullName": "黎时望"}, {"User_ID": 14683115837918,"User_Name": "13405700822","User_FullName": "冯一玮"}, {"User_ID": 14684575348020,"User_Name": "13901433323","User_FullName": "黄爱霞"}, {"User_ID": 14684748708040,"User_Name": "13913963735","User_FullName": "刘珍娣"}, {"User_ID": 14684774958044,"User_Name": "13901410728","User_FullName": "陈必新"}, {"User_ID": 14686795458108,"User_Name": "13107727671","User_FullName": "冯利群"}, {"User_ID": 14687359928116,"User_Name": "13805152228","User_FullName": "陈斌"}, {"User_ID": 14688289168166,"User_Name": "13773436000","User_FullName": "徐亚明"}, {"User_ID": 14691873848410,"User_Name": "18687137471","User_FullName": "haha"}, {"User_ID": 14691902788412,"User_Name": "13588335279","User_FullName": "陈2"}, {"User_ID": 14694275928500,"User_Name": "15190526662","User_FullName": "姚留珍"}, {"User_ID": 14696193958584,"User_Name": "18692699805","User_FullName": "柏小艳"}, {"User_ID": 14696319508592,"User_Name": "13806186072","User_FullName": "江志农"}, {"User_ID": 14699183018704,"User_Name": "13372037003","User_FullName": "王书"}, {"User_ID": 14699321398706,"User_Name": "13605235599","User_FullName": "韩群"}, {"User_ID": 14699458858712,"User_Name": "13915986969","User_FullName": "孙阳"}, {"User_ID": 14699550818720,"User_Name": "13705186111","User_FullName": "沈丽娟"}, {"User_ID": 14702854428864,"User_Name": "15051884045","User_FullName": "高生云"}, {"User_ID": 14709200009146,"User_Name": "13773463626","User_FullName": "王德坤"}, {"User_ID": 14710550039248,"User_Name": "13395200587","User_FullName": "季文昌"}, {"User_ID": 14710589809262,"User_Name": "13851830977","User_FullName": "单国森"}, {"User_ID": 14711527349320,"User_Name": "13584029778","User_FullName": "张本英"}, {"User_ID": 14714162329530,"User_Name": "15252325517","User_FullName": "季逸"}, {"User_ID": 14716102989722,"User_Name": "18995524312","User_FullName": "胡威"}, {"User_ID": 14718293489812,"User_Name": "13951054199","User_FullName": "廉红"}, {"User_ID": 14719177609856,"User_Name": "13951719675","User_FullName": "陈铭卫"}, {"User_ID": 14719224909868,"User_Name": "13867440518","User_FullName": "戴晓红"}, {"User_ID": 14722980090098,"User_Name": "18260619013","User_FullName": "徐晓丽"}, {"User_ID": 14723001360100,"User_Name": "13809027966","User_FullName": "张宝权"}, {"User_ID": 14723136130108,"User_Name": "18265055035","User_FullName": "尹秀芝"}, {"User_ID": 14724423310152,"User_Name": "18912974967","User_FullName": "姜开国"}, {"User_ID": 14724643780202,"User_Name": "15161211649","User_FullName": "孙茂中"}, {"User_ID": 14724648200206,"User_Name": "13815952263","User_FullName": "吴春兰"}, {"User_ID": 14725500540248,"User_Name": "18168000250","User_FullName": "张敏"}, {"User_ID": 14725567240252,"User_Name": "13651028609","User_FullName": "冷雪静"}, {"User_ID": 14729618270420,"User_Name": "18551657621","User_FullName": "徐帅"}, {"User_ID": 14733999410670,"User_Name": "13852888697","User_FullName": "生玉生"}, {"User_ID": 14734690510702,"User_Name": "13786415249","User_FullName": "曾仁炳"}, {"User_ID": 14743016701146,"User_Name": "15251257873","User_FullName": "范明"}, {"User_ID": 14743019621148,"User_Name": "18735779814","User_FullName": "王健"}, {"User_ID": 14743542511198,"User_Name": "15298372633","User_FullName": "张远涛"}, {"User_ID": 14748508971590,"User_Name": "13805141018","User_FullName": "王祖栋"}, {"User_ID": 14756399242004,"User_Name": "15195240801","User_FullName": "蔡桂玉"}, {"User_ID": 14759002752110,"User_Name": "13260548649","User_FullName": "胡"}, {"User_ID": 14759797862148,"User_Name": "18061158546","User_FullName": "虞光菊"}, {"User_ID": 14759904052158,"User_Name": "13625658129","User_FullName": "成晟"}, {"User_ID": 14760869352222,"User_Name": "13851832299","User_FullName": "秦超"}, {"User_ID": 14761852622256,"User_Name": "18105166977","User_FullName": "董庆高"}, {"User_ID": 14762595622276,"User_Name": "13951601671","User_FullName": "吴维云云"}, {"User_ID": 14762661232280,"User_Name": "15952645838","User_FullName": "冀宝贵"}, {"User_ID": 14763280492294,"User_Name": "18210879145","User_FullName": "张卡"}, {"User_ID": 14764960572420,"User_Name": "13033031119","User_FullName": "张宏树"}, {"User_ID": 14766306982580,"User_Name": "18971509188","User_FullName": "张飞"}, {"User_ID": 14766715012588,"User_Name": "18855105390","User_FullName": "18855105390"}, {"User_ID": 14767540372638,"User_Name": "13770448121","User_FullName": "宋延平"}, {"User_ID": 14767757342666,"User_Name": "13955088493","User_FullName": "戴晓伟"}, {"User_ID": 14768653262746,"User_Name": "13626860863","User_FullName": "臧银娜"}, {"User_ID": 14769249902792,"User_Name": "13851810930","User_FullName": "吴建成"}, {"User_ID": 14769499022824,"User_Name": "13813957002","User_FullName": "陈盈盈"}, {"User_ID": 14772024862966,"User_Name": "13809003695","User_FullName": "洪健"}, {"User_ID": 14773803313098,"User_Name": "13585133688","User_FullName": "陶志明"}, {"User_ID": 14774459793132,"User_Name": "13952113878","User_FullName": "吴坤"}, {"User_ID": 14774798993170,"User_Name": "13805505735","User_FullName": "刘勇"}, {"User_ID": 14775347413192,"User_Name": "13913020229","User_FullName": "马琼"}, {"User_ID": 14777466283364,"User_Name": "13913889019","User_FullName": "蒋国良"}, {"User_ID": 14777925413378,"User_Name": "18652061619","User_FullName": "李沁"}, {"User_ID": 14777949893380,"User_Name": "13951033688","User_FullName": "肖菊芳"}, {"User_ID": 14778812963420,"User_Name": "15952000059","User_FullName": "顾宸菲"}, {"User_ID": 14779111533492,"User_Name": "18252890596","User_FullName": "胡瑞荣"}, {"User_ID": 14780576833610,"User_Name": "13952008974","User_FullName": "黄能斌"}, {"User_ID": 14785608374052,"User_Name": "15851112233","User_FullName": "15851112233"}]
HTML;


//        $jsonArray = <<<HTML
//[{"USER_ID": 55846,"USER_NAME": "18251576605","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14643163915698,"USER_NAME": "18913316365","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14682985447904,"USER_NAME": "18516122218","USER_FULLNAME": "沈福瑛"}, {"USER_ID": 14685471088064,"USER_NAME": "18112585573","USER_FULLNAME": "孙玉萍"}, {"USER_ID": 14688301708182,"USER_NAME": "13816129636","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14701029248768,"USER_NAME": "18393023039","USER_FULLNAME": "马海力麦"}, {"USER_ID": 14709199899144,"USER_NAME": "13641631117","USER_FULLNAME": "吴金妹"}, {"USER_ID": 14709633619164,"USER_NAME": "15801860312","USER_FULLNAME": "吴锦萍"}, {"USER_ID": 14748935381614,"USER_NAME": "18930787207","USER_FULLNAME": "杨青"}, {"USER_ID": 14749590421660,"USER_NAME": "18638852601","USER_FULLNAME": "杨青"}]
//HTML;

        $storePath = "d:/report/maybe/";
        $apiServer = "https://ecg.mhealth365.cn/";
        $apiRecordUrl = $apiServer . "/ecg/api/iphone/ecg/EcGHistoryData/?auth_code=mHealth365_qTbmSvaL5c365d3z";
        $downloadUrl = "http://web.mhealth365.cn/ecgLine/DrawEcgImage?";
        $downloadParam = "report_id=%s&sec=%s&speed=%s";
        $cookieHeader = array("Cookie:PHPSESSID=3015e79jjt89d86hc7u4s0qj00;");
        $jsonArray = json_decode($jsonArray, true);
        $max = 10;
        $sec_step = 60;
        $list = array();
        foreach ($jsonArray as $rec) {
            $userId = $rec['USER_ID'];
            $userName = $rec['USER_FULLNAME'];
            $userPath = $storePath . $userId . "/";
            var_dump($userPath);
            if (!file_exists($userPath)) {
                mkdir($userPath, 0777, true);
            }
            $page = 1;
            $is_start = true;
            while ($is_start) {
                $req_data = array('user_id' => $userId, 'page_num' => $page, 'page_few' => $max);
                $dataListRes = HttpTools::https_post($apiRecordUrl, $req_data);
                $res = json_decode($dataListRes, true);
                if ($res['code'] == 200) {
                    $data = $res['data'];
                    if (empty($data)) {
                        $is_start = false;
                    } else {
                        foreach ($data as $rec) {
                            $Record_ID = $rec['Record_ID'];
                            $File_Start_Time = $rec['File_Start_Time'];
                            $File_Time_Long = $rec['File_Time_Long'];
                            $Devie_SN = $rec['Devie_SN'];
                            $User_ID = $rec['User_ID'];
                            $Record_State = $rec['Record_State'];
                            $Is_Delete = $rec['Is_Delete'];
                            if (!isset($list[$User_ID])) {
                                $list[$User_ID] = $Devie_SN;
                            }
                            $file_name = date('YmdHis', $File_Start_Time);
                            echo "Record_ID:" . $Record_ID . "\n";
                            echo "File_Start_Time:" . $File_Start_Time . "\n";
                            echo "File_Time_Long:" . $File_Time_Long . "\n";
                            echo "Is_Delete:" . $Is_Delete . "\n";
                            echo "Record_State:" . $Record_State . "\n";
                            $sec = 0;
                            while ($File_Time_Long > 0) {
                                echo $sec . "\n";
                                $downloadParam2 = sprintf($downloadParam, $Record_ID, $sec, 25);
                                $downloadRealUrl = $downloadUrl . $downloadParam2;
                                $fullPath = $sec == 0 ? $userPath . $file_name . ".png" : $userPath . $file_name . "(" . (intval($sec / 60)) . ").png";
//                                var_dump($downloadRealUrl);
//                                var_dump($fullPath);
//                                var_dump($cookieHeader);
                                echo $fullPath . "\n";
                                if (!file_exists($fullPath)) {
                                    $f = HttpTools::http_copy($downloadRealUrl, $fullPath, $cookieHeader, 60);
                                    if ($f === false) {
                                        die('download failure');
                                    }
                                } else {
                                    echo("already exists\n");
                                }
                                $sec = $sec + 60;
                                $File_Time_Long = $File_Time_Long - $sec_step;
                            }
                        }
                    }
                } else {
                    die('api request error');
                }
                $page++;
            }
        }
        $html = "";
        foreach ($list as $userId => $sn) {
            $html .= "$userId,$sn\r\n";
        }
        if ($res = fopen("d:/report/maybe/maybe.txt", "w+")) {
            file_put_contents("d:/report/maybe/maybe.txt", $html);
        }
        fclose($res);
    }


    public function actionXs()
    {
        $jsonArray = <<<HTML
[{"User_ID": 31983,"User_Name": "13001084028","User_FullName": "宋银峰"}, {"User_ID": 44969,"User_Name": "18335791111","User_FullName": "卫琴琴"}, {"User_ID": 51582,"User_Name": "13611560321","User_FullName": "濮杰"}, {"User_ID": 51826,"User_Name": "13951910092","User_FullName": "吴"}, {"User_ID": 51856,"User_Name": "13851990990","User_FullName": "刘安平"}, {"User_ID": 52668,"User_Name": "15077827742","User_FullName": "邵开友"}, {"User_ID": 53980,"User_Name": "18611736919","User_FullName": "汪涵"}, {"User_ID": 54666,"User_Name": "13501076160","User_FullName": "发哥"}, {"User_ID": 55524,"User_Name": "18118806613","User_FullName": "翟明伟"}, {"User_ID": 55638,"User_Name": "13671825604","User_FullName": "刘伟"}, {"User_ID": 56264,"User_Name": "13057523599","User_FullName": "沙祥宝"}, {"User_ID": 56340,"User_Name": "13770941505","User_FullName": "钱锦利"}, {"User_ID": 56420,"User_Name": "15856766685","User_FullName": "韩宗文"}, {"User_ID": 56432,"User_Name": "13910321872","User_FullName": "佟伟栋"}, {"User_ID": 56440,"User_Name": "13661383894","User_FullName": "yaoyao"}, {"User_ID": 56584,"User_Name": "18520201590","User_FullName": "wurunkai"}, {"User_ID": 56794,"User_Name": "13951892256","User_FullName": "王斌"}, {"User_ID": 56846,"User_Name": "13910612952","User_FullName": "沈德威"}, {"User_ID": 57096,"User_Name": "18029760733","User_FullName": "daa"}, {"User_ID": 57222,"User_Name": "13851357285","User_FullName": "孙荣"}, {"User_ID": 57990,"User_Name": "13505128128","User_FullName": "王振风"}, {"User_ID": 58240,"User_Name": "18061698513","User_FullName": "莫建芬"}, {"User_ID": 58366,"User_Name": "13705501108","User_FullName": "章学明"}, {"User_ID": 58446,"User_Name": "15850688705","User_FullName": "刘春青"}, {"User_ID": 58516,"User_Name": "13962295697","User_FullName": "陈凤宝"}, {"User_ID": 58622,"User_Name": "13813535228","User_FullName": "汤韵翠"}, {"User_ID": 59132,"User_Name": "13064859966","User_FullName": "尤金东"}, {"User_ID": 59568,"User_Name": "18949690920","User_FullName": "代冠美"}, {"User_ID": 59630,"User_Name": "13951980565","User_FullName": "许凤英"}, {"User_ID": 59646,"User_Name": "13905177672","User_FullName": "陈乃友"}, {"User_ID": 59658,"User_Name": "13961607020","User_FullName": "诸建平"}, {"User_ID": 59694,"User_Name": "13906150612","User_FullName": "谢振华"}, {"User_ID": 59702,"User_Name": "13584602893","User_FullName": "许金秀"}, {"User_ID": 59724,"User_Name": "13914787595","User_FullName": "蒋元龙"}, {"User_ID": 59736,"User_Name": "18951369898","User_FullName": "肖西林"}, {"User_ID": 59746,"User_Name": "15152868099","User_FullName": "张士潭"}, {"User_ID": 59748,"User_Name": "15951832120","User_FullName": "张红英"}, {"User_ID": 59750,"User_Name": "13955096433","User_FullName": "王维伦"}, {"User_ID": 59778,"User_Name": "13814005408","User_FullName": "孔凤莲"}, {"User_ID": 59784,"User_Name": "13913888103","User_FullName": "周利民"}, {"User_ID": 59806,"User_Name": "15805170037","User_FullName": "陈洪武"}, {"User_ID": 59814,"User_Name": "18118850089","User_FullName": "李庆云"}, {"User_ID": 59836,"User_Name": "18752553286","User_FullName": "陈金于"}, {"User_ID": 59864,"User_Name": "13852257540","User_FullName": "孙正月"}, {"User_ID": 59874,"User_Name": "13776623635","User_FullName": "洪西新"}, {"User_ID": 59928,"User_Name": "13861380002","User_FullName": "彭芳辉"}, {"User_ID": 60006,"User_Name": "13901420379","User_FullName": "王圣宽"}, {"User_ID": 60026,"User_Name": "13852296205","User_FullName": "徐文华"}, {"User_ID": 60060,"User_Name": "13775401121","User_FullName": "冯銮英"}, {"User_ID": 60064,"User_Name": "13505538866","User_FullName": "苏化敏"}, {"User_ID": 60082,"User_Name": "17714307077","User_FullName": "胡成仙"}, {"User_ID": 60094,"User_Name": "18673416776","User_FullName": "湖斌"}, {"User_ID": 60098,"User_Name": "13851625718","User_FullName": "孟军"}, {"User_ID": 60156,"User_Name": "13915982232","User_FullName": "时训怀"}, {"User_ID": 60242,"User_Name": "15152576203","User_FullName": "杨成芳"}, {"User_ID": 60286,"User_Name": "15950496969","User_FullName": "张瑞"}, {"User_ID": 60294,"User_Name": "13801569263","User_FullName": "张琴"}, {"User_ID": 60306,"User_Name": "15319456066","User_FullName": "李海成"}, {"User_ID": 60374,"User_Name": "13705638008","User_FullName": "陶为海"}, {"User_ID": 60378,"User_Name": "13815466516","User_FullName": "谌继诗"}, {"User_ID": 60488,"User_Name": "13861959182","User_FullName": "ghj"}, {"User_ID": 60644,"User_Name": "13951702391","User_FullName": "许安福"}, {"User_ID": 60656,"User_Name": "13775850550","User_FullName": "沙跃"}, {"User_ID": 60728,"User_Name": "13770690704","User_FullName": "常声元"}, {"User_ID": 60756,"User_Name": "18913913589","User_FullName": "曹瑞娟"}, {"User_ID": 60760,"User_Name": "18951522121","User_FullName": "陈以环"}, {"User_ID": 60766,"User_Name": "18951730840","User_FullName": "唐翠红"}, {"User_ID": 60844,"User_Name": "15251728672","User_FullName": "衣文斌"}, {"User_ID": 60900,"User_Name": "13615266469","User_FullName": "马玮煜"}, {"User_ID": 60904,"User_Name": "13814526472","User_FullName": "董光玉"}, {"User_ID": 61042,"User_Name": "15301592908","User_FullName": "许建"}, {"User_ID": 61174,"User_Name": "15190912591","User_FullName": "樊祥兴"}, {"User_ID": 61296,"User_Name": "15950556815","User_FullName": "牛庆芬"}, {"User_ID": 61338,"User_Name": "13913439966","User_FullName": "崔秉春"}, {"User_ID": 61346,"User_Name": "17755312571","User_FullName": "娄有恒"}, {"User_ID": 61414,"User_Name": "13905240228","User_FullName": "王保华"}, {"User_ID": 61428,"User_Name": "13813815764","User_FullName": "单巧萍"}, {"User_ID": 61460,"User_Name": "13952190026","User_FullName": "王道法"}, {"User_ID": 61510,"User_Name": "13951853252","User_FullName": "张家勇"}, {"User_ID": 61514,"User_Name": "13776619257","User_FullName": "张文秀"}, {"User_ID": 61520,"User_Name": "13705160358","User_FullName": "尚武"}, {"User_ID": 61522,"User_Name": "18251999511","User_FullName": "王春新"}, {"User_ID": 61610,"User_Name": "13960618268","User_FullName": "赵文伟"}, {"User_ID": 61842,"User_Name": "13605554966","User_FullName": "朱敏生"}, {"User_ID": 61864,"User_Name": "14752900713","User_FullName": "耿立芹"}, {"User_ID": 61900,"User_Name": "13912196008","User_FullName": "李慧楠"}, {"User_ID": 61956,"User_Name": "13505174112","User_FullName": "万新炎"}, {"User_ID": 62036,"User_Name": "13951694431","User_FullName": "王东平"}, {"User_ID": 62074,"User_Name": "13912902902","User_FullName": "孙岳庆"}, {"User_ID": 62144,"User_Name": "13965645599","User_FullName": "刘金芳"}, {"User_ID": 62146,"User_Name": "13327708050","User_FullName": "黄柯"}, {"User_ID": 62148,"User_Name": "13585207280","User_FullName": "王震晨"}, {"User_ID": 62164,"User_Name": "18061222240","User_FullName": "王坚宝"}, {"User_ID": 62304,"User_Name": "13584703708","User_FullName": "夏世美"}, {"User_ID": 62318,"User_Name": "13951601036","User_FullName": "陈杰"}, {"User_ID": 62344,"User_Name": "18626486303","User_FullName": "刘玉龙"}, {"User_ID": 62412,"User_Name": "15252367605","User_FullName": "吴立兵"}, {"User_ID": 62414,"User_Name": "18951658968","User_FullName": "王正永"}, {"User_ID": 62418,"User_Name": "18036955168","User_FullName": "周新亚"}, {"User_ID": 62444,"User_Name": "13805169167","User_FullName": "樊淑清"}, {"User_ID": 62460,"User_Name": "13338616881","User_FullName": "陈菊华"}, {"User_ID": 62468,"User_Name": "18365278396","User_FullName": "曹丽丽"}, {"User_ID": 62574,"User_Name": "13866964020","User_FullName": "张永才"}, {"User_ID": 62592,"User_Name": "13851371511","User_FullName": "周立娟"}, {"User_ID": 62634,"User_Name": "18551642709","User_FullName": "张燕"}, {"User_ID": 62638,"User_Name": "13809013313","User_FullName": "吴健勇"}, {"User_ID": 62660,"User_Name": "18936875118","User_FullName": "曹桂霞"}, {"User_ID": 62662,"User_Name": "18151676606","User_FullName": "曹桂霞"}, {"User_ID": 62770,"User_Name": "15152963287","User_FullName": "黄兆林"}, {"User_ID": 62776,"User_Name": "18912963526","User_FullName": "王淑云"}, {"User_ID": 62778,"User_Name": "13675293335","User_FullName": "白秀兰"}, {"User_ID": 62780,"User_Name": "18662758166","User_FullName": "张玲玲"}, {"User_ID": 62808,"User_Name": "18913854632","User_FullName": "吕飞"}, {"User_ID": 62858,"User_Name": "15358198710","User_FullName": "严富琴"}, {"User_ID": 62868,"User_Name": "13951795530","User_FullName": "吴志勇"}, {"User_ID": 62884,"User_Name": "15962042233","User_FullName": "唐明"}, {"User_ID": 62890,"User_Name": "17768535691","User_FullName": "孙彩萍"}, {"User_ID": 62896,"User_Name": "13951902756","User_FullName": "吴福水"}, {"User_ID": 62910,"User_Name": "13905282602","User_FullName": "陈和君"}, {"User_ID": 62938,"User_Name": "15152497696","User_FullName": "王心太"}, {"User_ID": 62972,"User_Name": "13952602826","User_FullName": "杨秀娟"}, {"User_ID": 63014,"User_Name": "18913966499","User_FullName": "何静华"}, {"User_ID": 63316,"User_Name": "13951162908","User_FullName": "任建明"}, {"User_ID": 63318,"User_Name": "13605198028","User_FullName": "孙道安"}, {"User_ID": 63336,"User_Name": "13951825659","User_FullName": "张爱萍"}, {"User_ID": 63384,"User_Name": "13905182051","User_FullName": "张维"}, {"User_ID": 63390,"User_Name": "13605142951","User_FullName": "童可夫"}, {"User_ID": 63406,"User_Name": "13913301143","User_FullName": "李想"}, {"User_ID": 63412,"User_Name": "13705122299","User_FullName": "朱建华"}, {"User_ID": 63438,"User_Name": "13327832589","User_FullName": "林洪根"}, {"User_ID": 63462,"User_Name": "15063532910","User_FullName": "黄启勇"}, {"User_ID": 63494,"User_Name": "18451671050","User_FullName": "王玲"}, {"User_ID": 63504,"User_Name": "15896404349","User_FullName": "潘汉金"}, {"User_ID": 63548,"User_Name": "18851185855","User_FullName": "常建华"}, {"User_ID": 63550,"User_Name": "13901533610","User_FullName": "陈学祥"}, {"User_ID": 63628,"User_Name": "13861603302","User_FullName": "夏振伟"}, {"User_ID": 63716,"User_Name": "13062954588","User_FullName": "李祥芝"}, {"User_ID": 63750,"User_Name": "15995180996","User_FullName": "唐海洋"}, {"User_ID": 63830,"User_Name": "13605179270","User_FullName": "徐学文"}, {"User_ID": 63842,"User_Name": "13601324815","User_FullName": "成开程"}, {"User_ID": 63856,"User_Name": "13062517027","User_FullName": "黄勇"}, {"User_ID": 63882,"User_Name": "13601467277","User_FullName": "徐学文"}, {"User_ID": 63886,"User_Name": "18351879279","User_FullName": "徐学文"}, {"User_ID": 63926,"User_Name": "13813854982","User_FullName": "李惠fen"}, {"User_ID": 63962,"User_Name": "13809096856","User_FullName": "汤学华"}, {"User_ID": 63990,"User_Name": "13016976516","User_FullName": "李银芝"}, {"User_ID": 64022,"User_Name": "13365232583","User_FullName": "赵红平"}, {"User_ID": 64024,"User_Name": "13951940076","User_FullName": "陈国亮"}, {"User_ID": 64068,"User_Name": "13770937061","User_FullName": "谷晓华"}, {"User_ID": 64114,"User_Name": "13814456911","User_FullName": "唐爱祥"}, {"User_ID": 64226,"User_Name": "13913983500","User_FullName": "卢俊生"}, {"User_ID": 64230,"User_Name": "13851493138","User_FullName": "陶立华"}, {"User_ID": 64238,"User_Name": "13815967789","User_FullName": "葛新民"}, {"User_ID": 64338,"User_Name": "17773305345","User_FullName": "喻娟"}, {"User_ID": 64440,"User_Name": "15195072920","User_FullName": "吕淑君"}, {"User_ID": 64508,"User_Name": "18262724598","User_FullName": "汪志强"}, {"User_ID": 64516,"User_Name": "13915900388","User_FullName": "陈长兰"}, {"User_ID": 64680,"User_Name": "13951830565","User_FullName": "侯玉红"}, {"User_ID": 64714,"User_Name": "13815995308","User_FullName": "周鸣斋"}, {"User_ID": 64938,"User_Name": "18936039025","User_FullName": "刘永菊"}, {"User_ID": 64976,"User_Name": "13951606177","User_FullName": "张连晓"}, {"User_ID": 65010,"User_Name": "13952636330","User_FullName": "范秀娣"}, {"User_ID": 65026,"User_Name": "15996248381","User_FullName": "金淑梅"}, {"User_ID": 65048,"User_Name": "15195758669","User_FullName": "邢德培"}, {"User_ID": 65054,"User_Name": "15811172773","User_FullName": "小兵"}, {"User_ID": 65056,"User_Name": "13813086550","User_FullName": "孙永培"}, {"User_ID": 65130,"User_Name": "13951869699","User_FullName": "汤承锋"}, {"User_ID": 65132,"User_Name": "13851860831","User_FullName": "张碧华"}, {"User_ID": 65140,"User_Name": "13961039436","User_FullName": "陈根荣"}, {"User_ID": 65216,"User_Name": "13806253660","User_FullName": "杨庆明"}, {"User_ID": 65220,"User_Name": "13961001882","User_FullName": "王亚丽"}, {"User_ID": 65234,"User_Name": "18955517171","User_FullName": "吴平"}, {"User_ID": 65514,"User_Name": "13905165485","User_FullName": "李明"}, {"User_ID": 65522,"User_Name": "15705260175","User_FullName": "刘巧云"}, {"User_ID": 65554,"User_Name": "17702503851","User_FullName": "薛璜"}, {"User_ID": 65620,"User_Name": "18252924999","User_FullName": "姜马祥"}, {"User_ID": 65680,"User_Name": "18552703336","User_FullName": "周修强"}, {"User_ID": 65978,"User_Name": "13813823328","User_FullName": "曾顺清"}, {"User_ID": 65986,"User_Name": "13961241572","User_FullName": "丁秀凤"}, {"User_ID": 66000,"User_Name": "13611509336","User_FullName": "张娟"}, {"User_ID": 66088,"User_Name": "18651161642","User_FullName": "王鑫元"}, {"User_ID": 66168,"User_Name": "13915860231","User_FullName": "丁秀凤"}, {"User_ID": 66228,"User_Name": "13004086136","User_FullName": "殷凯"}, {"User_ID": 66240,"User_Name": "13338957709","User_FullName": "吴正广"}, {"User_ID": 66254,"User_Name": "13901560399","User_FullName": "谷艮之"}, {"User_ID": 66262,"User_Name": "13813247227","User_FullName": "王大云"}, {"User_ID": 66298,"User_Name": "18651897751","User_FullName": "江运桃"}, {"User_ID": 66302,"User_Name": "18963602173","User_FullName": "许爱敏"}, {"User_ID": 66382,"User_Name": "15152624711","User_FullName": "蒋龙凤"}, {"User_ID": 66400,"User_Name": "15305181065","User_FullName": "赵雄美"}, {"User_ID": 66422,"User_Name": "18755783025","User_FullName": "许爱敏"}, {"User_ID": 66494,"User_Name": "18014808343","User_FullName": "金淑梅"}, {"User_ID": 66528,"User_Name": "13815968636","User_FullName": "张文景"}, {"User_ID": 66646,"User_Name": "15951616919","User_FullName": "陈保华"}, {"User_ID": 66670,"User_Name": "13670907072","User_FullName": "苏兆荣"}, {"User_ID": 66696,"User_Name": "13815606699","User_FullName": "刘恩彩"}, {"User_ID": 66988,"User_Name": "13775085161","User_FullName": "刘雪玉"}, {"User_ID": 67098,"User_Name": "13305160088","User_FullName": "陶顺生"}, {"User_ID": 67310,"User_Name": "13813951356","User_FullName": "郭鲁明"}, {"User_ID": 67346,"User_Name": "13951980879","User_FullName": "于泽滨"}, {"User_ID": 67376,"User_Name": "13913829998","User_FullName": "何文霞"}, {"User_ID": 67400,"User_Name": "18662084736","User_FullName": "何恺"}, {"User_ID": 67584,"User_Name": "13915961516","User_FullName": "李林桢"}, {"User_ID": 67716,"User_Name": "18936022066","User_FullName": "陶其胜"}, {"User_ID": 67888,"User_Name": "15895951928","User_FullName": "涂静"}, {"User_ID": 67934,"User_Name": "13851757281","User_FullName": "潘宁松"}, {"User_ID": 68006,"User_Name": "18951970786","User_FullName": "薛从海"}, {"User_ID": 68156,"User_Name": "13914721265","User_FullName": "万立新"}, {"User_ID": 68212,"User_Name": "13805245878","User_FullName": "高慎亮"}, {"User_ID": 68216,"User_Name": "18512525093","User_FullName": "谢佳东"}, {"User_ID": 68236,"User_Name": "13813906033","User_FullName": "夏耘"}, {"User_ID": 68446,"User_Name": "18056201590","User_FullName": "陈远"}, {"User_ID": 68552,"User_Name": "13951700643","User_FullName": "王千梅"}, {"User_ID": 68564,"User_Name": "13605182498","User_FullName": "王炼"}, {"User_ID": 68568,"User_Name": "13645139595","User_FullName": "徐建龙"}, {"User_ID": 68638,"User_Name": "13913958812","User_FullName": "雷正中"}, {"User_ID": 68644,"User_Name": "13057575557","User_FullName": "李炜曦"}, {"User_ID": 68692,"User_Name": "15952090806","User_FullName": "姜祯祯"}, {"User_ID": 68736,"User_Name": "13914413508","User_FullName": "李瑶勤"}, {"User_ID": 68756,"User_Name": "13921268361","User_FullName": "庞玉珍"}, {"User_ID": 68818,"User_Name": "13851994604","User_FullName": "侯百顺"}, {"User_ID": 69690,"User_Name": "13770565370","User_FullName": "温智成"}, {"User_ID": 69796,"User_Name": "13372069158","User_FullName": "张佩富"}, {"User_ID": 69804,"User_Name": "13901590910","User_FullName": "顾惠芬"}, {"User_ID": 69808,"User_Name": "18752530573","User_FullName": "李俊"}, {"User_ID": 69856,"User_Name": "15996254976","User_FullName": "高静"}, {"User_ID": 69874,"User_Name": "18365584695","User_FullName": "霍忠敏"}, {"User_ID": 70112,"User_Name": "18205198632","User_FullName": "孙玉保"}, {"User_ID": 70128,"User_Name": "18936877368","User_FullName": "刘楚榕"}, {"User_ID": 70188,"User_Name": "13505230898","User_FullName": "陈伏田"}, {"User_ID": 70226,"User_Name": "18951982174","User_FullName": "蒋玉萍"}, {"User_ID": 70230,"User_Name": "18913936595","User_FullName": "夏蓉"}, {"User_ID": 70322,"User_Name": "18068862121","User_FullName": "陈刚"}, {"User_ID": 70398,"User_Name": "13711505931","User_FullName": "曲宏达"}, {"User_ID": 70704,"User_Name": "18915929998","User_FullName": "施明峰"}, {"User_ID": 70924,"User_Name": "13813092651","User_FullName": "王桂生"}, {"User_ID": 71298,"User_Name": "15385266829","User_FullName": "王影"}, {"User_ID": 71304,"User_Name": "13955070937","User_FullName": "廖永萍"}, {"User_ID": 71392,"User_Name": "15056520220","User_FullName": "陈松涛"}, {"User_ID": 71572,"User_Name": "15189193939","User_FullName": "张爱华"}, {"User_ID": 71602,"User_Name": "13912048144","User_FullName": "赵志董"}, {"User_ID": 71714,"User_Name": "15255512022","User_FullName": "王和萱"}, {"User_ID": 71890,"User_Name": "13767944120","User_FullName": "李鸿"}, {"User_ID": 71934,"User_Name": "13951667257","User_FullName": "齐素玲"}, {"User_ID": 72012,"User_Name": "15996721788","User_FullName": "巩延军"}, {"User_ID": 72036,"User_Name": "13924266262","User_FullName": "黄海标"}, {"User_ID": 72058,"User_Name": "15250771596","User_FullName": "陶亚"}, {"User_ID": 72166,"User_Name": "13925099749","User_FullName": "李耀枢"}, {"User_ID": 72364,"User_Name": "13852663296","User_FullName": "周爱云"}, {"User_ID": 72490,"User_Name": "15252697331","User_FullName": "陆爱琴"}, {"User_ID": 72570,"User_Name": "13901591477","User_FullName": "栾容"}, {"User_ID": 72584,"User_Name": "13001728890","User_FullName": "栾兆坤"}, {"User_ID": 72590,"User_Name": "13675167311","User_FullName": "孙桂秀"}, {"User_ID": 72630,"User_Name": "13878502848","User_FullName": "张泽业"}, {"User_ID": 72632,"User_Name": "13822966362","User_FullName": "周惠强"}, {"User_ID": 72934,"User_Name": "13357723189","User_FullName": "沈庆利"}, {"User_ID": 72988,"User_Name": "15106145126","User_FullName": "张凤仙"}, {"User_ID": 73176,"User_Name": "13913394149","User_FullName": "费明翠"}, {"User_ID": 73590,"User_Name": "15715617179","User_FullName": "崔秀云"}, {"User_ID": 73706,"User_Name": "13852969916","User_FullName": "张梅风"}, {"User_ID": 73726,"User_Name": "15996006668","User_FullName": "王立国"}, {"User_ID": 73934,"User_Name": "15298513813","User_FullName": "戴中琴"}, {"User_ID": 73996,"User_Name": "13970570207","User_FullName": "罗江卫"}, {"User_ID": 74018,"User_Name": "13906143206","User_FullName": "李荣宪"}, {"User_ID": 74140,"User_Name": "18795856459","User_FullName": "唐一凡"}, {"User_ID": 74154,"User_Name": "18056201545","User_FullName": "陈险峰"}, {"User_ID": 74284,"User_Name": "13814028223","User_FullName": "吴建平"}, {"User_ID": 74374,"User_Name": "13451853805","User_FullName": "陈乐仁"}, {"User_ID": 74462,"User_Name": "13852608266","User_FullName": "龚仁鹏"}, {"User_ID": 74466,"User_Name": "13914409950","User_FullName": "龚仁春"}, {"User_ID": 74840,"User_Name": "18012326366","User_FullName": "贾玉平"}, {"User_ID": 74902,"User_Name": "15295730536","User_FullName": "罗荣娣"}, {"User_ID": 74904,"User_Name": "13951148918","User_FullName": "高士义"}, {"User_ID": 74922,"User_Name": "13705150772","User_FullName": "赵明德"}, {"User_ID": 74930,"User_Name": "13901586403","User_FullName": "周景山"}, {"User_ID": 74940,"User_Name": "13801471906","User_FullName": "陈骁军"}, {"User_ID": 75138,"User_Name": "13913854238","User_FullName": "韩维林"}, {"User_ID": 75178,"User_Name": "13359038159","User_FullName": "代冠美"}, {"User_ID": 14536873953322,"User_Name": "13611511699","User_FullName": "陈坚"}, {"User_ID": 14542956053504,"User_Name": "15823857469","User_FullName": "柯俊"}, {"User_ID": 14544650673522,"User_Name": "18082269488","User_FullName": "魏星"}, {"User_ID": 14552041083530,"User_Name": "15353114996","User_FullName": "郭飞航"}, {"User_ID": 14557837393556,"User_Name": "18203921120","User_FullName": "焦尚书"}, {"User_ID": 14561327363586,"User_Name": "13718376805","User_FullName": "刘丽岩"}, {"User_ID": 14581866913630,"User_Name": "13942030108","User_FullName": "董振宇"}, {"User_ID": 14603414053662,"User_Name": "18805040000","User_FullName": "lotto了"}, {"User_ID": 14604527283704,"User_Name": "15009444098","User_FullName": "李延福"}, {"User_ID": 14610469703780,"User_Name": "13909549058","User_FullName": "陈兆让"}, {"User_ID": 14610587213786,"User_Name": "13409540928","User_FullName": "宋克霞"}, {"User_ID": 14611230713816,"User_Name": "18741693355","User_FullName": "张秀玲"}, {"User_ID": 14611337063940,"User_Name": "13703525956","User_FullName": "郭丕珍"}, {"User_ID": 14611403233970,"User_Name": "18652078126","User_FullName": "查倩"}, {"User_ID": 14611405414000,"User_Name": "15161993927","User_FullName": "高云龙"}, {"User_ID": 14614053944182,"User_Name": "13951898009","User_FullName": "夏春阳"}, {"User_ID": 14614055554184,"User_Name": "15305182893","User_FullName": "胡成仙"}, {"User_ID": 14616508514218,"User_Name": "13505193638","User_FullName": "叶明亿"}, {"User_ID": 14616560734228,"User_Name": "13701408061","User_FullName": "张绍洲"}, {"User_ID": 14617220564240,"User_Name": "15640641057","User_FullName": "韩淑芬"}, {"User_ID": 14617244594248,"User_Name": "17751845678","User_FullName": "刘洋"}, {"User_ID": 14618123024272,"User_Name": "13851780805","User_FullName": "王小庆"}, {"User_ID": 14618129944300,"User_Name": "13913893147","User_FullName": "刘达人123456"}, {"User_ID": 14622625114534,"User_Name": "18981320891","User_FullName": "杜劲"}, {"User_ID": 14622787934580,"User_Name": "13905262435","User_FullName": "姚扣宝"}, {"User_ID": 14622790934584,"User_Name": "13813985838","User_FullName": "李晓桐"}, {"User_ID": 14622891954594,"User_Name": "18962640501","User_FullName": "姚建岳"}, {"User_ID": 14623149064602,"User_Name": "15805177742","User_FullName": "田田"}, {"User_ID": 14623281994620,"User_Name": "13505182796","User_FullName": "胡永生"}, {"User_ID": 14623426034650,"User_Name": "17000108928","User_FullName": "磨磨唧唧"}, {"User_ID": 14624228914704,"User_Name": "15850886699","User_FullName": "王曙光"}, {"User_ID": 14624308264754,"User_Name": "15950366815","User_FullName": "王红"}, {"User_ID": 14625004194808,"User_Name": "15951269310","User_FullName": "徐前勇"}, {"User_ID": 14627941664932,"User_Name": "15876399378","User_FullName": "全尧卿"}, {"User_ID": 14629401675004,"User_Name": "18786707914","User_FullName": "去去去w"}, {"User_ID": 14639051515502,"User_Name": "13805242305","User_FullName": "苏永平"}, {"User_ID": 14639244965522,"User_Name": "13401222098","User_FullName": "曹乃明"}, {"User_ID": 14645210975790,"User_Name": "17714578059","User_FullName": "李晓辉"}, {"User_ID": 14645814135814,"User_Name": "13512518040","User_FullName": "熊正红"}, {"User_ID": 14648035565918,"User_Name": "13913929848","User_FullName": "余奇林"}, {"User_ID": 14648338555930,"User_Name": "13906142611","User_FullName": "罗晓平"}, {"User_ID": 14649227405982,"User_Name": "18915173070","User_FullName": "施展"}, {"User_ID": 14650138176144,"User_Name": "13962422888","User_FullName": "李向阳"}, {"User_ID": 14652141426316,"User_Name": "13852519169","User_FullName": "王学荣"}, {"User_ID": 14652274346342,"User_Name": "18751802866","User_FullName": "夏茂梁"}, {"User_ID": 14658712566662,"User_Name": "15949145968","User_FullName": "陈其芳"}, {"User_ID": 14659596006700,"User_Name": "13912993843","User_FullName": "葛隆华"}, {"User_ID": 14659631516708,"User_Name": "13809041208","User_FullName": "李明"}, {"User_ID": 14665978967066,"User_Name": "13776671779","User_FullName": "龚子研"}, {"User_ID": 14669238897262,"User_Name": "13912592619","User_FullName": "董栋善"}, {"User_ID": 14669500897298,"User_Name": "15996010958","User_FullName": "丁洁"}, {"User_ID": 14670167637336,"User_Name": "18956499968","User_FullName": "程浩然"}, {"User_ID": 14671163217374,"User_Name": "13851841669","User_FullName": "王宁"}, {"User_ID": 14676182057568,"User_Name": "15150642313","User_FullName": "史波良"}, {"User_ID": 14678709067660,"User_Name": "13675213062","User_FullName": "李友之"}, {"User_ID": 14681563657810,"User_Name": "18360978408","User_FullName": "陈中林"}, {"User_ID": 14681585727812,"User_Name": "18752504727","User_FullName": "孙桂华"}, {"User_ID": 14682084647830,"User_Name": "13951844782","User_FullName": "邵培刚"}, {"User_ID": 14682294127858,"User_Name": "13921405136","User_FullName": "黎时望"}, {"User_ID": 14683115837918,"User_Name": "13405700822","User_FullName": "冯一玮"}, {"User_ID": 14684575348020,"User_Name": "13901433323","User_FullName": "黄爱霞"}, {"User_ID": 14684748708040,"User_Name": "13913963735","User_FullName": "刘珍娣"}, {"User_ID": 14684774958044,"User_Name": "13901410728","User_FullName": "陈必新"}, {"User_ID": 14686795458108,"User_Name": "13107727671","User_FullName": "冯利群"}, {"User_ID": 14687359928116,"User_Name": "13805152228","User_FullName": "陈斌"}, {"User_ID": 14688289168166,"User_Name": "13773436000","User_FullName": "徐亚明"}, {"User_ID": 14691873848410,"User_Name": "18687137471","User_FullName": "haha"}, {"User_ID": 14691902788412,"User_Name": "13588335279","User_FullName": "陈2"}, {"User_ID": 14694275928500,"User_Name": "15190526662","User_FullName": "姚留珍"}, {"User_ID": 14696193958584,"User_Name": "18692699805","User_FullName": "柏小艳"}, {"User_ID": 14696319508592,"User_Name": "13806186072","User_FullName": "江志农"}, {"User_ID": 14699183018704,"User_Name": "13372037003","User_FullName": "王书"}, {"User_ID": 14699321398706,"User_Name": "13605235599","User_FullName": "韩群"}, {"User_ID": 14699458858712,"User_Name": "13915986969","User_FullName": "孙阳"}, {"User_ID": 14699550818720,"User_Name": "13705186111","User_FullName": "沈丽娟"}, {"User_ID": 14702854428864,"User_Name": "15051884045","User_FullName": "高生云"}, {"User_ID": 14709200009146,"User_Name": "13773463626","User_FullName": "王德坤"}, {"User_ID": 14710550039248,"User_Name": "13395200587","User_FullName": "季文昌"}, {"User_ID": 14710589809262,"User_Name": "13851830977","User_FullName": "单国森"}, {"User_ID": 14711527349320,"User_Name": "13584029778","User_FullName": "张本英"}, {"User_ID": 14714162329530,"User_Name": "15252325517","User_FullName": "季逸"}, {"User_ID": 14716102989722,"User_Name": "18995524312","User_FullName": "胡威"}, {"User_ID": 14718293489812,"User_Name": "13951054199","User_FullName": "廉红"}, {"User_ID": 14719177609856,"User_Name": "13951719675","User_FullName": "陈铭卫"}, {"User_ID": 14719224909868,"User_Name": "13867440518","User_FullName": "戴晓红"}, {"User_ID": 14722980090098,"User_Name": "18260619013","User_FullName": "徐晓丽"}, {"User_ID": 14723001360100,"User_Name": "13809027966","User_FullName": "张宝权"}, {"User_ID": 14723136130108,"User_Name": "18265055035","User_FullName": "尹秀芝"}, {"User_ID": 14724423310152,"User_Name": "18912974967","User_FullName": "姜开国"}, {"User_ID": 14724643780202,"User_Name": "15161211649","User_FullName": "孙茂中"}, {"User_ID": 14724648200206,"User_Name": "13815952263","User_FullName": "吴春兰"}, {"User_ID": 14725500540248,"User_Name": "18168000250","User_FullName": "张敏"}, {"User_ID": 14725567240252,"User_Name": "13651028609","User_FullName": "冷雪静"}, {"User_ID": 14729618270420,"User_Name": "18551657621","User_FullName": "徐帅"}, {"User_ID": 14733999410670,"User_Name": "13852888697","User_FullName": "生玉生"}, {"User_ID": 14734690510702,"User_Name": "13786415249","User_FullName": "曾仁炳"}, {"User_ID": 14743016701146,"User_Name": "15251257873","User_FullName": "范明"}, {"User_ID": 14743019621148,"User_Name": "18735779814","User_FullName": "王健"}, {"User_ID": 14743542511198,"User_Name": "15298372633","User_FullName": "张远涛"}, {"User_ID": 14748508971590,"User_Name": "13805141018","User_FullName": "王祖栋"}, {"User_ID": 14756399242004,"User_Name": "15195240801","User_FullName": "蔡桂玉"}, {"User_ID": 14759002752110,"User_Name": "13260548649","User_FullName": "胡"}, {"User_ID": 14759797862148,"User_Name": "18061158546","User_FullName": "虞光菊"}, {"User_ID": 14759904052158,"User_Name": "13625658129","User_FullName": "成晟"}, {"User_ID": 14760869352222,"User_Name": "13851832299","User_FullName": "秦超"}, {"User_ID": 14761852622256,"User_Name": "18105166977","User_FullName": "董庆高"}, {"User_ID": 14762595622276,"User_Name": "13951601671","User_FullName": "吴维云云"}, {"User_ID": 14762661232280,"User_Name": "15952645838","User_FullName": "冀宝贵"}, {"User_ID": 14763280492294,"User_Name": "18210879145","User_FullName": "张卡"}, {"User_ID": 14764960572420,"User_Name": "13033031119","User_FullName": "张宏树"}, {"User_ID": 14766306982580,"User_Name": "18971509188","User_FullName": "张飞"}, {"User_ID": 14766715012588,"User_Name": "18855105390","User_FullName": "18855105390"}, {"User_ID": 14767540372638,"User_Name": "13770448121","User_FullName": "宋延平"}, {"User_ID": 14767757342666,"User_Name": "13955088493","User_FullName": "戴晓伟"}, {"User_ID": 14768653262746,"User_Name": "13626860863","User_FullName": "臧银娜"}, {"User_ID": 14769249902792,"User_Name": "13851810930","User_FullName": "吴建成"}, {"User_ID": 14769499022824,"User_Name": "13813957002","User_FullName": "陈盈盈"}, {"User_ID": 14772024862966,"User_Name": "13809003695","User_FullName": "洪健"}, {"User_ID": 14773803313098,"User_Name": "13585133688","User_FullName": "陶志明"}, {"User_ID": 14774459793132,"User_Name": "13952113878","User_FullName": "吴坤"}, {"User_ID": 14774798993170,"User_Name": "13805505735","User_FullName": "刘勇"}, {"User_ID": 14775347413192,"User_Name": "13913020229","User_FullName": "马琼"}, {"User_ID": 14777466283364,"User_Name": "13913889019","User_FullName": "蒋国良"}, {"User_ID": 14777925413378,"User_Name": "18652061619","User_FullName": "李沁"}, {"User_ID": 14777949893380,"User_Name": "13951033688","User_FullName": "肖菊芳"}, {"User_ID": 14778812963420,"User_Name": "15952000059","User_FullName": "顾宸菲"}, {"User_ID": 14779111533492,"User_Name": "18252890596","User_FullName": "胡瑞荣"}, {"User_ID": 14780576833610,"User_Name": "13952008974","User_FullName": "黄能斌"}, {"User_ID": 14785608374052,"User_Name": "15851112233","User_FullName": "15851112233"}]
HTML;
        $jsonArray = <<<HTML
[{"User_ID": 14699458858712,"User_Name": "13915986969","User_FullName": "孙阳"}]
HTML;

        $importA = <<<HTML
'14531013586172',
'14531123856184',
'14532725146264',
'14532782806282',
'14532814686290',
'14533387676352',
'14533391716358',
'14533411726368',
'14522222535754',
'14522199365752',
'14522225335756',
'14522194735748',
'14594810339626',
'14594832289656',
'14594831299652',
'14598470359880',
'14604666140780',
'14606017750860',
'14606119310892',
'14607048611100',
'14609006811292',
'14609007021294',
'14609877391424',
'14610339081476',
'14646779620254',
'14646782370308',
'14648454231294',
'14648715291418',
'14649622642766',
'14648951751532',
'14648835291512',
'14650086092918',
'14650144452978',
'14654749025882',
'14655653316440',
'14656795766802',
'14656836446820',
'14650144543016',
'14659426577996',
'14659543528082',
'14657969797284',
'14710415742424',
'14648555901354',
'14710504232480',
'14710898312720',
'14711276072808',
'14711310092812',
'14731671507280',
'14713467654600',
'14733872189958',
'14734722071136',
'14744411140692',
'14744506030838',
'14744537900860',
'14744565250880',
'14751578220160',
'14759115756556',
'14760136677944',
'14760153627964',
'14761741939122',
'14762525499920',
'14768498868540',
'14770286580634',
'14772062992842',
'14772284673262',
'14775524648060',
'14779872817544',
'14781401260362',
'14781524790694',
'14782412242426',
'14782413402432',
'14783360705108',
'14786189569450',
'14787523805440',
'14788380967240',
'14788380537238',
'14788550837714',
'14789194489064',
'14790162550328',
'14790875081332',
'14793287015718',
'14794459377698',
'14796251491154',
'14796358291320',
'14798075904394',
'14798263915016',
'14799779327712',
'14800381219240',
'14801318841466',
'14801321261494'
'14472217833926',
'14531098416180',
'14531701996190',
'14531702286192',
'14533385776344',
'14534479696550',
'14599944140128',
'14601677010338',
'14604672130796',
'14606401890978',
'14606402550980',
'14606412571004',
'14606427771060',
'14607048611102',
'14608915801234',
'14648484991302',
'14648466301296',
'14648349731238',
'14648546281330',
'14648555911360',
'14648581031378',
'14648583931386',
'14649235302144',
'14650006612854',
'14650030072868',
'14648806201506',
'14649233552108',
'14648767401492',
'14650132582974',
'14650144452978',
'14651127053644',
'14651046293608',
'14651043963604',
'14651042273596',
'14651034403592',
'14651351033720',
'14655448696280',
'146176639024',
'14671715414164',
'14710170812360',
'14648555851334',
'14648483081298',
'14710524872504',
'14710509692484',
'14710431672436',
'14710913342732',
'14710908652724',
'14711042342788',
'14711319422814',
'14710776642594',
'14711333832842',
'146176868098',
'14711337982852',
'14711333832844',
'14711331242832',
'14711389572934',
'14710891672698',
'14712209143310',
'14712236463322',
'14712256303334',
'14712672653944',
'14712296283380',
'14713003284086',
'14718432567578',
'14719404248310',
'14722824461288',
'14732911109118',
'14732439708840',
'14736816693482',
'14744470510828',
'14757661805356',
'14762385569614',
'14744637950988',
'14762417309730',
'14683093979790',
'14720062219050',
'14764967843308',
'14764809242942',
'14748693197234',
'14767817137832',
'14773816365660',
'14775498308020',
'14775853488682',
'14776202029016',
'14776200559012',
'14779618376474',
'14784250086326',
'14785188017694',
'14785197917726',
'14785271347790',
'14785704938064',
'14786672490386',
'14786189569450',
'14788380967240',
'14790258740468',
'14781815371112',
'14795463290208',
'14804213156116',
'14804315046584',
'14804679436890'
HTML;

        $importA = trim($importA);
        $importArray = explode($importA, ',');
        $importArray = array();
//        $jsonArray = <<<HTML
//[{"USER_ID": 55846,"USER_NAME": "18251576605","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14643163915698,"USER_NAME": "18913316365","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14682985447904,"USER_NAME": "18516122218","USER_FULLNAME": "沈福瑛"}, {"USER_ID": 14685471088064,"USER_NAME": "18112585573","USER_FULLNAME": "孙玉萍"}, {"USER_ID": 14688301708182,"USER_NAME": "13816129636","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14701029248768,"USER_NAME": "18393023039","USER_FULLNAME": "马海力麦"}, {"USER_ID": 14709199899144,"USER_NAME": "13641631117","USER_FULLNAME": "吴金妹"}, {"USER_ID": 14709633619164,"USER_NAME": "15801860312","USER_FULLNAME": "吴锦萍"}, {"USER_ID": 14748935381614,"USER_NAME": "18930787207","USER_FULLNAME": "杨青"}, {"USER_ID": 14749590421660,"USER_NAME": "18638852601","USER_FULLNAME": "杨青"}]
//HTML;

        $storePath = "d:/report/xls/";
        $apiServer = "https://ecg.mhealth365.cn/";
        $apiRecordUrl = $apiServer . "/ecg/api/iphone/ecg/EcGHistoryData/?auth_code=mHealth365_qTbmSvaL5c365d3z";
        $downloadUrl = "http://web.mhealth365.cn/ecgLine/DrawEcgImage?";
        $downloadParam = "report_id=%s&sec=%s&speed=%s";
        $cookieHeader = array("Cookie:PHPSESSID=3015e79jjt89d86hc7u4s0qj00;");
        $jsonArray = json_decode($jsonArray, true);
        var_dump($jsonArray);
        $max = 10;
        $sec_step = 60;
        $list = array();
        foreach ($jsonArray as $rec) {
            $userId = $rec['User_ID'];
            $phone = $rec['User_Name'];
            $userName = $rec['User_FullName'];
            $userPath = $storePath . $userId . "/";
            var_dump($userPath);
            if (!file_exists($userPath)) {
                mkdir($userPath, 0777, true);
            }
            $page = 1;
            $is_start = true;
            while ($is_start) {
                $req_data = array('user_id' => $userId, 'page_num' => $page, 'page_few' => $max);
                $dataListRes = HttpTools::https_post($apiRecordUrl, $req_data);
                $res = json_decode($dataListRes, true);
                var_dump($req_data);
                var_dump($res);
                if ($res['code'] == 200) {
                    $data = $res['data'];
                    if (empty($data)) {
                        $is_start = false;
                    } else {
                        foreach ($data as $rec) {
                            $Record_ID = $rec['Record_ID'];
                            if(array_search("'".$Record_ID."'", $importArray)){
                                continue;
                            }
                            $File_Start_Time = $rec['File_Start_Time'];
                            $File_Time_Long = $rec['File_Time_Long'];
                            $Devie_SN = $rec['Devie_SN'];
                            $User_ID = $rec['User_ID'];
                            $Record_State = $rec['Record_State'];
                            $Is_Delete = $rec['Is_Delete'];
                            $list[] = array('USER_ID' => $User_ID, 'Record_ID' => $Record_ID, 'File_Start_Time' => $File_Start_Time, 'File_Time_Long' => $File_Time_Long, 'USER_NAME' => $phone, 'USER_FULLNAME' => $userName);
                            $file_name = date('YmdHis', $File_Start_Time);
                            echo "Record_ID:" . $Record_ID . "\n";
                            echo "File_Start_Time:" . $File_Start_Time . "\n";
                            echo "File_Time_Long:" . $File_Time_Long . "\n";
                            echo "Is_Delete:" . $Is_Delete . "\n";
                            echo "Record_State:" . $Record_State . "\n";
                            $sec = 0;
                            while ($File_Time_Long > 0) {
                                echo $sec . "\n";
                                $downloadParam2 = sprintf($downloadParam, $Record_ID, $sec, 25);
                                $downloadRealUrl = $downloadUrl . $downloadParam2;
                                $fullPath = $sec == 0 ? $userPath . $file_name . ".png" : $userPath . $file_name . "(" . (intval($sec / 60)) . ").png";
//                                var_dump($downloadRealUrl);
//                                var_dump($fullPath);
//                                var_dump($cookieHeader);
                                echo $fullPath . "\n";
                                if (!file_exists($fullPath)) {
                                    $f = HttpTools::http_copy($downloadRealUrl, $fullPath, $cookieHeader, 60);
                                    if ($f === false) {
                                        die('download failure');
                                    }
                                } else {
                                    echo("already exists\n");
                                }
                                $sec = $sec + 60;
                                $File_Time_Long = $File_Time_Long - $sec_step;
                            }
                        }
                    }
                } else {
                    die('api request error');
                }
                $page++;
            }
        }
        $html = "";
        foreach ($list as $item) {
            $item = array_values($item);
            $html .= '\'' . join("','", $item) . '\'';
        }
        if ($res = fopen("d:/report/xls/maybe.csv", "w+")) {
            file_put_contents("d:/report/xls/maybe.csv", $html);
        }
        fclose($res);
    }


    public function actionIssue()
    {
        $jsonArray2 = <<<HTML
       '14522439555808',
'14531013586172',
'14531123856184',
'14532725146264',
'14532782806282',
'14532814686290',
'14533387676352',
'14533391716358',
'14533411726368',
'14522222535754',
'14522199365752',
'14522225335756',
'14522194735748',
'14594810339626',
'14594832289656',
'14594831299652',
'14598470359880',
'14604666140780',
'14606017750860',
'14606119310892',
'14607048611100',
'14609006811292',
'14609007021294',
'14609877391424',
'14610339081476',
'14646779620254',
'14646782370308',
'14648454231294',
'14648715291418',
'14649622642766',
'14648951751532',
'14648835291512',
'14650086092918',
'14650144452978',
'14654749025882',
'14655653316440',
'14656795766802',
'14656836446820',
'14650144543016',
'14659426577996',
'14659543528082',
'14657969797284',
'14710415742424',
'14648555901354',
'14710504232480',
'14710898312720',
'14711276072808',
'14711310092812',
'14731671507280',
'14713467654600',
'14733872189958',
'14734722071136',
'14744411140692',
'14744506030838',
'14744537900860',
'14744565250880',
'14751578220160',
'14759115756556',
'14760136677944',
'14760153627964',
'14761741939122',
'14762525499920',
'14768498868540',
'14770286580634',
'14772062992842',
'14772284673262',
'14775524648060',
'14779872817544',
'14781401260362',
'14781524790694',
'14782412242426',
'14782413402432',
'14783360705108',
'14786189569450',
'14787523805440',
'14788380967240',
'14788380537238',
'14788550837714',
'14789194489064',
'14790162550328',
'14790875081332',
'14793287015718',
'14794459377698',
'14796251491154',
'14796358291320',
'14798075904394',
'14798263915016',
'14799779327712',
'14800381219240',
'14801318841466',
'14801321261494'
HTML;
        $jsonArray3 = <<<HTML3
'14472217833926',
'14531098416180',
'14531701996190',
'14531702286192',
'14533385776344',
'14534479696550',
'14599944140128',
'14601677010338',
'14604672130796',
'14606401890978',
'14606402550980',
'14606412571004',
'14606427771060',
'14607048611102',
'14608915801234',
'14648484991302',
'14648466301296',
'14648349731238',
'14648546281330',
'14648555911360',
'14648581031378',
'14648583931386',
'14649235302144',
'14650006612854',
'14650030072868',
'14648806201506',
'14649233552108',
'14648767401492',
'14650132582974',
'14650144452978',
'14651127053644',
'14651046293608',
'14651043963604',
'14651042273596',
'14651034403592',
'14651351033720',
'14655448696280',
'146176639024',
'14671715414164',
'14710170812360',
'14648555851334',
'14648483081298',
'14710524872504',
'14710509692484',
'14710431672436',
'14710913342732',
'14710908652724',
'14711042342788',
'14711319422814',
'14710776642594',
'14711333832842',
'146176868098',
'14711337982852',
'14711333832844',
'14711331242832',
'14711389572934',
'14710891672698',
'14712209143310',
'14712236463322',
'14712256303334',
'14712672653944',
'14712296283380',
'14713003284086',
'14718432567578',
'14719404248310',
'14722824461288',
'14732911109118',
'14732439708840',
'14736816693482',
'14744470510828',
'14757661805356',
'14762385569614',
'14744637950988',
'14762417309730',
'14683093979790',
'14720062219050',
'14764967843308',
'14764809242942',
'14748693197234',
'14767817137832',
'14773816365660',
'14775498308020',
'14775853488682',
'14776202029016',
'14776200559012',
'14779618376474',
'14784250086326',
'14785188017694',
'14785197917726',
'14785271347790',
'14785704938064',
'14786672490386',
'14786189569450',
'14788380967240',
'14790258740468',
'14781815371112',
'14795463290208',
'14804213156116',
'14804315046584',
HTML3;

//error 14712888724022
        $jsonArray = <<<HTML
'14804679436890'
HTML;


        $storePath = "d:/report/maybe2/";
        $apiServer = "https://ecg.mhealth365.cn/";
        $apiRecordUrl = $apiServer . "/ecg/api/iphone/ecg/GetHistoryInfo/?auth_code=mHealth365_qTbmSvaL5c365d3z";
        $downloadUrl = "http://web.mhealth365.cn/ecgLine/DrawEcgImage?";
        $downloadParam = "report_id=%s&sec=%s&speed=%s";
        $cookieHeader = array("Cookie:PHPSESSID=jt5oen74q8v7hrcrnv4t16p3p5;");
        $jsonArray = explode(',', $jsonArray);
        $sec_step = 60;
        $list = array();
        $userPath = $storePath;
        if (!file_exists($userPath)) {
            mkdir($userPath, 0777, true);
        }
        echo "===============" . count($jsonArray) . "===============";
        foreach ($jsonArray as $record_id2) {
            $record_id2 = trim(trim($record_id2), '\'');
            $req_data = array('record_id' => $record_id2);
            $dataListRes = HttpTools::https_post($apiRecordUrl, $req_data);
            $res = json_decode($dataListRes, true);
            var_dump($req_data);
            var_dump($dataListRes);
            var_dump($apiRecordUrl);
            if ($res['code'] == 200) {
                $rec = $res['data'];

                $Record_ID = $rec['Record_ID'];
                $File_Start_Time = $rec['File_Start_Time'];
                $File_Time_Long = $rec['File_Time_Long'];
                $Devie_SN = $rec['Devie_SN'];
                $User_ID = $rec['User_ID'];
                $Record_State = $rec['Record_State'];
                $Is_Delete = $rec['Is_Delete'];
                if (!isset($list[$User_ID])) {
                    $list[$User_ID] = $Devie_SN;
                }
                $file_name = date('YmdHis', $File_Start_Time);
                echo "Record_ID:" . $Record_ID . "\n";
                echo "File_Start_Time:" . $File_Start_Time . "\n";
                echo "File_Time_Long:" . $File_Time_Long . "\n";
                echo "Is_Delete:" . $Is_Delete . "\n";
                echo "Record_State:" . $Record_State . "\n";
                $sec = 0;
                while ($File_Time_Long > 0) {
                    echo $sec . "\n";
                    $downloadParam2 = sprintf($downloadParam, $Record_ID, $sec, 25);
                    $downloadRealUrl = $downloadUrl . $downloadParam2;
                    $fullPath = $sec == 0 ? $userPath . $Record_ID . ".png" : $userPath . $Record_ID . "(" . (intval($sec / 60)) . ").png";
                    echo $fullPath . "\n";
                    if (!file_exists($fullPath)) {
                        $f = HttpTools::http_copy($downloadRealUrl, $fullPath, $cookieHeader, 60);
                        if ($f === false) {
                            die('download failure');
                        }
                    } else {
                        echo("already exists\n");
                    }
                    $sec = $sec + 60;
                    $File_Time_Long = $File_Time_Long - $sec_step;
                }
            } else {
                die('api request error');
            }
        }

        $html = "";
        foreach ($list as $userId => $sn) {
            $html .= "$userId,$sn\r\n";
        }
        if ($res = fopen("d:/report/maybe2/maybe.txt", "w+")) {
            file_put_contents("d:/report/maybe2/maybe.txt", $html);
        }
        fclose($res);
    }


    public function actionCheck()
    {
        $jsonArray = <<<HTML
[{"USER_ID": 14678539517644,"USER_NAME": "18202134101","USER_FULLNAME": "高树根"}, {"USER_ID": 14680404477748,"USER_NAME": "13818612262","USER_FULLNAME": "解克勤"}, {"USER_ID": 14680730857774,"USER_NAME": "13816959762","USER_FULLNAME": "王勇"}, {"USER_ID": 14683117797920,"USER_NAME": "13621754567","USER_FULLNAME": "钟兴发"}, {"USER_ID": 14684234667998,"USER_NAME": "13501835583","USER_FULLNAME": "马恒章"}, {"USER_ID": 14684247478000,"USER_NAME": "18017287655","USER_FULLNAME": "殷薇薇"}, {"USER_ID": 14684292278004,"USER_NAME": "18019086737","USER_FULLNAME": "苏菊"}, {"USER_ID": 14684361278010,"USER_NAME": "13012890392","USER_FULLNAME": "奚日昶"}, {"USER_ID": 14685339308060,"USER_NAME": "13472577243","USER_FULLNAME": "李俊民"}, {"USER_ID": 14686042838096,"USER_NAME": "13701859960","USER_FULLNAME": "张永红"}, {"USER_ID": 14688273848164,"USER_NAME": "18918190736","USER_FULLNAME": "金继文"}, {"USER_ID": 14688301568180,"USER_NAME": "15618688519","USER_FULLNAME": "倪俊飞"}, {"USER_ID": 14692371928424,"USER_NAME": "13601925531","USER_FULLNAME": "徐文明"}, {"USER_ID": 14692698828438,"USER_NAME": "13817383170","USER_FULLNAME": "赵福根"}, {"USER_ID": 14693228278446,"USER_NAME": "13390970353","USER_FULLNAME": "徐立德"}, {"USER_ID": 14694288068502,"USER_NAME": "18621976658","USER_FULLNAME": "郭德慈"}, {"USER_ID": 14696720368602,"USER_NAME": "15800414121","USER_FULLNAME": "常中林"}, {"USER_ID": 14701907928814,"USER_NAME": "13564611307","USER_FULLNAME": "春香"}, {"USER_ID": 14702222188838,"USER_NAME": "18930333976","USER_FULLNAME": "邓伯明"}, {"USER_ID": 14702816598856,"USER_NAME": "13916835345","USER_FULLNAME": "尚月玲"}, {"USER_ID": 14705268698958,"USER_NAME": "13818034713","USER_FULLNAME": "周新林"}, {"USER_ID": 14706389699010,"USER_NAME": "13816471731","USER_FULLNAME": "王秀丽"}, {"USER_ID": 14707112919038,"USER_NAME": "13918155734","USER_FULLNAME": "赵麟"}, {"USER_ID": 14707304869044,"USER_NAME": "13917522537","USER_FULLNAME": "吴祖勤"}, {"USER_ID": 14707629889050,"USER_NAME": "17701850551","USER_FULLNAME": "朱菊生"}, {"USER_ID": 14707873349052,"USER_NAME": "13002137374","USER_FULLNAME": "何少华"}, {"USER_ID": 14710546299238,"USER_NAME": "13621726135","USER_FULLNAME": "陈利明"}, {"USER_ID": 14712146139346,"USER_NAME": "13585833911","USER_FULLNAME": "张雪松"}, {"USER_ID": 14713306769450,"USER_NAME": "18918175127","USER_FULLNAME": "承瑞英"}, {"USER_ID": 14713404519468,"USER_NAME": "13817276303","USER_FULLNAME": "黄明"}, {"USER_ID": 14713973639492,"USER_NAME": "13817024996","USER_FULLNAME": "沈秀英"}, {"USER_ID": 14714146609510,"USER_NAME": "13817774368","USER_FULLNAME": "徐宝苏"}, {"USER_ID": 14715042449668,"USER_NAME": "18916049612","USER_FULLNAME": "周才萍"}, {"USER_ID": 14716675759744,"USER_NAME": "18052574338","USER_FULLNAME": "姚定祥"}, {"USER_ID": 14717993119808,"USER_NAME": "13917482853","USER_FULLNAME": "纪海元"}, {"USER_ID": 14719193109864,"USER_NAME": "18721591950","USER_FULLNAME": "邵惠珍"}, {"USER_ID": 14719379469876,"USER_NAME": "13916474983","USER_FULLNAME": "左玉俊"}, {"USER_ID": 14719470559894,"USER_NAME": "15351662703","USER_FULLNAME": "孙小伟"}, {"USER_ID": 14732880400590,"USER_NAME": "18016425292","USER_FULLNAME": "戴鑫"}, {"USER_ID": 14732965310596,"USER_NAME": "13003240739","USER_FULLNAME": "陆田芙"}, {"USER_ID": 14735953720780,"USER_NAME": "13761217974","USER_FULLNAME": "孟美玲"}, {"USER_ID": 14735976080782,"USER_NAME": "18930383681","USER_FULLNAME": "方金根"}, {"USER_ID": 14744268271252,"USER_NAME": "18918213667","USER_FULLNAME": "常超"}, {"USER_ID": 14744511351268,"USER_NAME": "13701779774","USER_FULLNAME": "朱丽珍"}, {"USER_ID": 14745174471298,"USER_NAME": "13601605335","USER_FULLNAME": "陆永伟"}, {"USER_ID": 14745368301334,"USER_NAME": "13816192166","USER_FULLNAME": "钱林娣"}, {"USER_ID": 14752143711818,"USER_NAME": "13761774430","USER_FULLNAME": "肖兆娣"}, {"USER_ID": 14764960362416,"USER_NAME": "13641838674","USER_FULLNAME": "刘德才"}]
HTML;
//        $jsonArray = <<<HTML
//[{"USER_ID": 55846,"USER_NAME": "18251576605","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14643163915698,"USER_NAME": "18913316365","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14682985447904,"USER_NAME": "18516122218","USER_FULLNAME": "沈福瑛"}, {"USER_ID": 14685471088064,"USER_NAME": "18112585573","USER_FULLNAME": "孙玉萍"}, {"USER_ID": 14688301708182,"USER_NAME": "13816129636","USER_FULLNAME": "张秀珍"}, {"USER_ID": 14701029248768,"USER_NAME": "18393023039","USER_FULLNAME": "马海力麦"}, {"USER_ID": 14709199899144,"USER_NAME": "13641631117","USER_FULLNAME": "吴金妹"}, {"USER_ID": 14709633619164,"USER_NAME": "15801860312","USER_FULLNAME": "吴锦萍"}, {"USER_ID": 14748935381614,"USER_NAME": "18930787207","USER_FULLNAME": "杨青"}, {"USER_ID": 14749590421660,"USER_NAME": "18638852601","USER_FULLNAME": "杨青"}]
//HTML;
        $apiServer = "https://ecg.mhealth365.cn/";
        $apiRecordUrl = $apiServer . "/ecg/api/iphone/ecg/EcGHistoryData/?auth_code=mHealth365_qTbmSvaL5c365d3z";
        $jsonArray = json_decode($jsonArray, true);
        $list = array();
        foreach ($jsonArray as $rec) {
            $userId = $rec['USER_ID'];
            $userFullname = $rec['USER_FULLNAME'];
            $req_data = array('user_id' => $userId, 'page_num' => 1, 'page_few' => 1);
            $dataListRes = HttpTools::https_post($apiRecordUrl, $req_data);
            $res = json_decode($dataListRes, true);
            if ($res['code'] == 200) {
                $data = $res['data'];
                if (empty($data)) {
                    $list[$userId] = $userFullname;
                }
            } else {
                die('api request error');
            }
        }
        $html = "";
        foreach ($list as $userId => $userFullname) {
            $html .= "$userId,$userFullname\r\n";
        }
        if ($res = fopen("d:/report/noData.txt", "w+")) {
            file_put_contents("d:/report/noData.txt", $html);
        }
        fclose($res);
    }
}


