<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resources".
 *
 * @property string $id
 * @property string $name
 * @property string $desc
 * @property string $suffix
 * @property string $thumb
 * @property integer $size
 * @property float $duration
 * @property string $url
 * @property string $third_resource_id
 * @property string $convert_status
 * @property integer $created_at
 * @property integer $creator_id
 * @property integer $visit_num
 */
class Resources extends \yii\db\ActiveRecord
{
    const CONVERT_STATUS_CONVERTING = 'converting';
    const CONVERT_STATUS_FISHING = 'converted';
    public $files;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resources';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['size', 'created_at', 'creator_id', 'visit_num'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['desc', 'thumb', 'url'], 'string', 'max' => 500],
            [['suffix'], 'string', 'max' => 8],
            [['convert_status'], 'string', 'max' => 10],
            [['third_resource_id'], 'string', 'max' => 32],
            [['files'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', '名称'),
            'desc' => Yii::t('app', '资源描述'),
            'suffix' => Yii::t('app', '文件后缀'),
            'duration' => Yii::t('app', '时长'),
            'thumb' => Yii::t('app', '缩略图'),
            'size' => Yii::t('app', '文件大小(kb)'),
            'times' => Yii::t('app', '时长(秒)'),
            'url' => Yii::t('app', '文件路径'),
            'created_at' => Yii::t('app', '创建时间'),
            'creator_id' => Yii::t('app', '创建者'),
            'third_resource_id' => Yii::t('app', '第三方资源编号'),
            'visit_num' => Yii::t('app', '播放量'),
            'convert_status' => Yii::t('app', '转码状态'),
        ];
    }
}
