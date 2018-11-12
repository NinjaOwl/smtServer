<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jzry".
 *
 * @property string $id
 * @property string $name
 * @property string $alias
 * @property integer $gender
 * @property string $birthday
 * @property string $nation
 * @property string $religion
 * @property string $faculty
 * @property string $idcard
 * @property string $addr
 * @property string $residence
 * @property string $tel
 * @property string $certificateno
 */
class Jzry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jzry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'alias', 'nation', 'religion', 'faculty', 'idcard', 'certificateno'], 'string', 'max' => 50],
            [['addr', 'residence'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '序号',
            'name' => '姓名',
            'alias' => '教（法）名',
            'gender' => '性别',
            'birthday' => '出生年月',
            'nation' => '民族',
            'religion' => '教别',
            'faculty' => '教职',
            'idcard' => '身份证号码',
            'addr' => '通信地址',
            'residence' => '户口所在地',
            'tel' => '联系电话',
            'certificateno' => '证书编号',
        ];
    }

    /**
     * @inheritdoc
     * @return JzryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JzryQuery(get_called_class());
    }
}
