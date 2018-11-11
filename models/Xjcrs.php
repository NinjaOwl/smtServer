<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xjcrs".
 *
 * @property string $id
 * @property string $name
 * @property integer $gender
 * @property string $nation
 * @property string $region
 * @property string $birthday
 * @property string $penname
 * @property string $education
 * @property string $degree
 * @property string $place
 * @property string $party
 * @property string $title
 * @property string $idcard
 * @property string $company
 * @property string $duties
 * @property string $group
 * @property string $addr
 * @property string $tel
 * @property string $email
 * @property string $avatar
 * @property string $detail
 * @property integer $isCPPCC
 * @property integer $isNPC
 * @property string $resume
 */
class Xjcrs extends \yii\db\ActiveRecord
{
    public $avatarUpload;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'avatarUpload' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'filesStorage' => 'fileStorage', // my custom fileStorage from configuration(for properly remove the file from disk)
                'attribute' => 'avatarUpload',
                'pathAttribute' => 'avatar',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'xjcrs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'isCPPCC', 'isNPC'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'nation', 'region', 'penname', 'education', 'degree', 'place', 'party', 'title', 'idcard', 'group'], 'string', 'max' => 50],
            [['company', 'duties', 'addr', 'email', 'avatar', 'detail'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 20],
            [['resume'], 'string', 'max' => 1000],
            [['email'], 'email'],
            [['avatarUpload'],'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '编号'),
            'name' => Yii::t('app', '姓名'),
            'gender' => Yii::t('app', '性别'),
            'nation' => Yii::t('app', '民族'),
            'region' => Yii::t('app', '籍贯'),
            'birthday' => Yii::t('app', '出生年月'),
            'penname' => Yii::t('app', '笔名'),
            'education' => Yii::t('app', '学历'),
            'degree' => Yii::t('app', '学位'),
            'place' => Yii::t('app', '出生地'),
            'party' => Yii::t('app', '党派'),
            'title' => Yii::t('app', '技术职称'),
            'idcard' => Yii::t('app', '身份证号码'),
            'company' => Yii::t('app', '单位'),
            'duties' => Yii::t('app', '职务'),
            'group' => Yii::t('app', '所属群体'),
            'addr' => Yii::t('app', '通讯地址'),
            'tel' => Yii::t('app', '联系电话'),
            'email' => Yii::t('app', '电子邮箱'),
            'avatar' => Yii::t('app', '照片'),
            'detail' => Yii::t('app', '何时何处参加社会团体及任职情况'),
            'isCPPCC' => Yii::t('app', '是否政协委员'),
            'isNPC' => Yii::t('app', '是否人大代表'),
            'resume' => Yii::t('app', '个人简历'),
            'avatarUpload' => Yii::t('app', '头像'),
        ];
    }
}
