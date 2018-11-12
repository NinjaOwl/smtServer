<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shhy".
 *
 * @property string $id
 * @property string $name
 * @property integer $gender
 * @property string $birthday
 * @property string $nation
 * @property string $region
 * @property string $party
 * @property string $education
 * @property string $degree
 * @property string $title
 * @property string $idcard
 * @property string $company
 * @property string $duties
 * @property string $addr
 * @property string $tel
 * @property string $wxid
 * @property string $email
 * @property string $shid
 * @property string $shtime
 * @property string $majorduties
 * @property string $majorhonors
 * @property string $resume
 * @property string $e_name
 * @property string $e_legalrepre
 * @property string $e_registrationaddr
 * @property string $e_establishdate
 * @property string $e_registno
 * @property string $e_industry
 * @property string $e_employeno
 * @property string $e_addr
 * @property string $e_contactname
 * @property string $e_contactduties
 * @property string $e_contactemail
 * @property string $e_contacttel
 * @property string $e_contactfax
 * @property integer $isestablishparty
 * @property string $partymemberno
 */
class Shhy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shhy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'shid', 'e_employeno', 'isestablishparty', 'partymemberno'], 'integer'],
            [['birthday', 'shtime', 'e_establishdate'], 'safe'],
            [['name', 'nation', 'region', 'party', 'education', 'degree', 'title', 'idcard', 'e_legalrepre', 'e_contactname', 'e_contacttel'], 'string', 'max' => 50],
            [['company', 'duties', 'addr', 'email', 'e_name', 'e_registrationaddr', 'e_industry', 'e_addr', 'e_contactduties', 'e_contactemail', 'e_contactfax'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 20],
            [['wxid', 'majorduties', 'e_registno'], 'string', 'max' => 100],
            [['majorhonors', 'resume'], 'string', 'max' => 1000],
            [['email', 'e_contactemail'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '姓名',
            'gender' => '性别',
            'birthday' => '出生年月',
            'nation' => '民族',
            'region' => '籍贯',
            'party' => '党派',
            'education' => '学历',
            'degree' => '学位',
            'title' => '职称',
            'idcard' => '身份证号码',
            'company' => '单位',
            'duties' => '职务',
            'addr' => '通讯地址',
            'tel' => '联系电话',
            'wxid' => '微信号',
            'email' => '电子邮箱',
            'shid' => '隶属商会',
            'shtime' => '加入商会时间',
            'majorduties' => '主要社会职务',
            'majorhonors' => '主要荣誉',
            'resume' => '个人简历',
            'e_name' => '企业名称',
            'e_legalrepre' => '企业法人代表',
            'e_registrationaddr' => '企业注册地点',
            'e_establishdate' => '企业成立时间',
            'e_registno' => '企业工商登记号',
            'e_industry' => '企业所属行业',
            'e_employeno' => '企业员工人数',
            'e_addr' => '企业地址',
            'e_contactname' => '企业联系人姓名',
            'e_contactduties' => '企业联系人职务',
            'e_contactemail' => '企业联系人电子邮件',
            'e_contacttel' => '企业联系人联系方式',
            'e_contactfax' => '企业联系人传真',
            'isestablishparty' => '是否建立党组织',
            'partymemberno' => '党员人数',
        ];
    }

    /**
     * @inheritdoc
     * @return ShhyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ShhyQuery(get_called_class());
    }
}
