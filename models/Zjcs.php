<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%zjcs}}".
 *
 * @property string $id
 * @property string $palcename
 * @property string $religion
 * @property string $leader
 * @property integer $gender
 * @property string $idcard
 * @property string $tel
 * @property string $partytime
 * @property string $partymember
 * @property string $community
 * @property string $liaison
 * @property string $liaisontel
 * @property string $monitors
 * @property string $extinguishers
 * @property string $certificatenumber
 * @property string $people
 * @property string $placearea
 * @property string $buildarea
 * @property string $memberno
 * @property string $photo
 * @property string $remark
 */
class Zjcs extends \yii\db\ActiveRecord
{


    public $photoUpload;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'photoUpload' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'filesStorage' => 'fileStorage', // my custom fileStorage from configuration(for properly remove the file from disk)
                'attribute' => 'photoUpload',
                'pathAttribute' => 'photo',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zjcs}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender', 'partymember', 'monitors', 'extinguishers', 'memberno'], 'integer'],
//            [['partytime'], 'safe'],
            [['palcename', 'religion', 'leader', 'idcard', 'community', 'liaison', 'certificatenumber'], 'string', 'max' => 50],
            [['tel', 'liaisontel'], 'string', 'max' => 20],
            [['people', 'placearea', 'buildarea'], 'string', 'max' => 500],
            [['photo','partytime'], 'string', 'max' => 255],
            [['photoUpload'],'safe'],
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
            'palcename' => '场所名称',
            'religion' => '教别',
            'leader' => '负责人',
            'gender' => '性别',
            'idcard' => '身份证号码',
            'tel' => '联系电话',
            'partytime' => '聚会时间',
            'partymember' => '聚会人数',
            'community' => '所属社区',
            'liaison' => '社区联络员',
            'liaisontel' => '联络员电话',
            'monitors' => '监控数量',
            'extinguishers' => '灭火器数目',
            'certificatenumber' => '登记证号',
            'people' => '主要教职人员',
            'placearea' => '场所占地面积',
            'buildarea' => '场所建筑面积',
            'memberno' => '场所教徒总数',
            'photo' => '场所照片',
            'remark' => '备注',
            'photoUpload' => Yii::t('app', '场所照片'),
        ];
    }

    /**
     * @inheritdoc
     * @return ZjcsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZjcsQuery(get_called_class());
    }
}
