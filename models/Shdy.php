<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shdy".
 *
 * @property string $id
 * @property string $name
 * @property integer $gender
 * @property string $nation
 * @property string $idcard
 * @property string $birthday
 * @property string $education
 * @property integer $category
 * @property string $partytime
 * @property string $formalpartytime
 * @property string $tel
 * @property string $addr
 */
class Shdy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shdy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'category'], 'integer'],
            [['birthday', 'partytime', 'formalpartytime'], 'safe'],
            [['name', 'nation', 'idcard', 'education'], 'string', 'max' => 50],
            [['tel'], 'string', 'max' => 20],
            [['addr'], 'string', 'max' => 255],
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
            'idcard' => Yii::t('app', '身份证号'),
            'birthday' => Yii::t('app', '出生年月'),
            'education' => Yii::t('app', '学历'),
            'category' => Yii::t('app', '党员类别'),
            'partytime' => Yii::t('app', '加入党组织日期'),
            'formalpartytime' => Yii::t('app', '转为正式党员日期'),
            'tel' => Yii::t('app', '联系电话'),
            'addr' => Yii::t('app', '家庭住址'),
        ];
    }
}
