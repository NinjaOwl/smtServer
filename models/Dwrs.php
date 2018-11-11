<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dwrs".
 *
 * @property string $id
 * @property string $name
 * @property integer $gender
 * @property string $birthday
 * @property string $nation
 * @property string $education
 * @property string $region
 * @property string $party
 * @property string $company
 * @property string $duties
 * @property string $tel
 * @property string $community
 * @property integer $isCPPCC
 * @property integer $isNPC
 * @property string $remark
 */
class Dwrs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dwrs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'isCPPCC', 'isNPC'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'nation', 'education', 'region', 'party', 'community'], 'string', 'max' => 50],
            [['company', 'duties'], 'string', 'max' => 255],
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
            'id' => Yii::t('app', '编号'),
            'name' => Yii::t('app', '姓名'),
            'gender' => Yii::t('app', '性别'),
            'birthday' => Yii::t('app', '出生年月'),
            'nation' => Yii::t('app', '民族'),
            'education' => Yii::t('app', '学历'),
            'region' => Yii::t('app', '籍贯'),
            'party' => Yii::t('app', '党派'),
            'company' => Yii::t('app', '单位'),
            'duties' => Yii::t('app', '职务'),
            'tel' => Yii::t('app', '联系电话'),
            'community' => Yii::t('app', '所属社区'),
            'isCPPCC' => Yii::t('app', '是否政协委员 '),
            'isNPC' => Yii::t('app', '是否人大代表'),
            'remark' => Yii::t('app', '备注'),
        ];
    }
}
