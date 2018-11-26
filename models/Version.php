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
 * @property string $file_name
 * @property string $file_size
 * @property integer $is_latest
 * @property integer $is_force
 * @property integer $release_time
 */
class Version extends \yii\db\ActiveRecord
{
    public $downloadUrlUpload;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'avatarUpload' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'filesStorage' => 'fileStorage', // my custom fileStorage from configuration(for properly remove the file from disk)
                'attribute' => 'downloadUrlUpload',
                'pathAttribute' => 'download_url',
                'sizeAttribute' => 'file_size',
                'nameAttribute' => 'file_name',
            ],
        ];
    }

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
            [['version_code'], 'required'],
            [['is_latest', 'is_force', 'release_time'], 'integer'],
            [['version_code'], 'string', 'max' => 20],
            [['file_size'], 'string', 'max' => 10],
            [['version_content'], 'string', 'max' => 500],
            [['download_url', 'file_name'], 'string', 'max' => 100],
            [['downloadUrlUpload'], 'safe']
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
            'version_content' => Yii::t('app', '升级内容'),
            'download_url' => Yii::t('app', '下载网址'),
            'file_size' => Yii::t('app', '文件大小'),
            'is_latest' => Yii::t('app', '是否最新版本'),
            'is_force' => Yii::t('app', '是否强制安装'),
            'release_time' => Yii::t('app', '发布时间'),
            'downloadUrlUpload' => Yii::t('app', '请选择要上传的版本'),
        ];
    }
}
