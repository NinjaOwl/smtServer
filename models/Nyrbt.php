<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nyrbt".
 *
 * @property string $id
 * @property string $name
 * @property integer $gender
 * @property string $nation
 * @property string $community
 * @property string $idcard
 * @property string $tel
 * @property string $workstatus
 * @property string $remark
 * @property string $year
 */
class Nyrbt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nyrbt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'year'], 'integer'],
            [['name', 'nation', 'community', 'idcard'], 'string', 'max' => 50],
            [['tel'], 'string', 'max' => 20],
            [['workstatus', 'remark'], 'string', 'max' => 1000],
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
            'nation' => '民族',
            'community' => '所属社区',
            'idcard' => '身份证号码',
            'tel' => '联系电话',
            'workstatus' => '工作现状',
            'year' => '年份',
            'remark' => '备注',
        ];
    }

    /**
     * @inheritdoc
     * @return NyrbtQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NyrbtQuery(get_called_class());
    }
}
