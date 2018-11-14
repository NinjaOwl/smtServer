<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "version".
 *
 * @property integer $id
 * @property string $version_code
 * @property string $version_content
 * @property string $download_url
 * @property integer $is_lateast
 * @property integer $is_force
 * @property integer $release_time
 */
class Version extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'version';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['version_code', 'download_url'], 'required'],
            [['is_lateast', 'is_force', 'release_time'], 'integer'],
            [['version_code'], 'string', 'max' => 20],
            [['version_content'], 'string', 'max' => 500],
            [['download_url'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'version_code' => Yii::t('app', '版本号'),
            'version_content' => Yii::t('app', '升级日志'),
            'download_url' => Yii::t('app', '升级下载网址'),
            'is_lateast' => Yii::t('app', '版本状态  1:最新版本，0：之前老版本'),
            'is_force' => Yii::t('app', '是否强制安装'),
            'release_time' => Yii::t('app', '发布时间'),
        ];
    }
}
