<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ssmz".
 *
 * @property string $id
 * @property string $name
 * @property integer $gender
 * @property string $birthday
 * @property string $nation
 * @property string $region
 * @property string $addr
 * @property string $company
 * @property string $tel
 * @property integer $ispoor
 * @property string $income
 * @property string $familydetail
 * @property string $poordetail
 * @property string community
 * @property string $remark
 */
class Ssmz extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ssmz';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'ispoor', 'income'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'nation', 'community','region'], 'string', 'max' => 50],
            [['addr', 'company', 'familydetail', 'poordetail'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 20],
            [['remark'], 'string', 'max' => 1000],
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
            'gender' => '性别',
            'birthday' => '出生年月',
            'nation' => '民族',
            'community' => '所属社区',
            'region' => '籍贯',
            'addr' => '家庭住址',
            'company' => '单位',
            'tel' => '联系电话',
            'ispoor' => '是否为贫困户',
            'income' => '家庭年收入(元)',
            'familydetail' => '家庭其他人员情况',
            'poordetail' => '家庭贫困原因说明',
            'remark' => '备注',
        ];
    }

    /**
     * @inheritdoc
     * @return SsmzQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SsmzQuery(get_called_class());
    }
}
