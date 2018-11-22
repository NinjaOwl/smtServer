<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resources".
 *
 * @property string $id
 * @property string $fid
 * @property string $name
 * @property string $desc
 * @property string $suffix
 * @property string $thumb
 * @property integer $size
 * @property integer $times
 * @property string $url
 * @property integer $createTime
 * @property string $createUser
 * @property string $videoId
 */
class Resources extends \yii\db\ActiveRecord
{
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
            [['fid'], 'required'],
            [['fid', 'size', 'times', 'createTime'], 'integer'],
            [['name', 'createUser'], 'string', 'max' => 50],
            [['desc', 'thumb', 'url'], 'string', 'max' => 255],
            [['suffix'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fid' => Yii::t('app', '厂表id'),
            'name' => Yii::t('app', '名称'),
            'desc' => Yii::t('app', '资源描述'),
            'suffix' => Yii::t('app', '文件后缀'),
            'thumb' => Yii::t('app', '缩略图'),
            'size' => Yii::t('app', '文件大小(kb)'),
            'times' => Yii::t('app', '时长(秒)'),
            'url' => Yii::t('app', '文件路径'),
            'createTime' => Yii::t('app', '创建时间'),
            'createUser' => Yii::t('app', '创建者'),
        ];
    }
}
