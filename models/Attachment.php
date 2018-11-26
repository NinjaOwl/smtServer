<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "attachment".
 *
 * @property string $id
 * @property string $rid
 * @property string $name
 * @property string $desc
 * @property string $suffix
 * @property integer $size
 * @property string $url
 * @property string $file_name
 * @property integer $created_at
 * @property integer $creator_id
 */
class Attachment extends \yii\db\ActiveRecord
{
    public $urlUpload;

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'avatarUpload' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'filesStorage' => 'fileStorage', // my custom fileStorage from configuration(for properly remove the file from disk)
                'attribute' => 'urlUpload',
                'pathAttribute' => 'url',
                'nameAttribute' => 'file_name',
                'sizeAttribute' => 'size',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'attachment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rid'], 'required'],
            [['rid', 'size', 'created_at', 'creator_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['desc', 'url'], 'string', 'max' => 255],
            [['suffix'], 'string', 'max' => 8],
            [['file_name'], 'string', 'max' => 100],
            [['urlUpload'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'rid' => Yii::t('app', '资源id'),
            'name' => Yii::t('app', '名称'),
            'desc' => Yii::t('app', '资源描述'),
            'suffix' => Yii::t('app', '文件后缀'),
            'size' => Yii::t('app', '文件大小(kb)'),
            'url' => Yii::t('app', '文件路径'),
            'file_name' => Yii::t('app', '文件名'),
            'created_at' => Yii::t('app', '创建时间'),
            'creator_id' => Yii::t('app', '创建者'),
            'urlUpload' => Yii::t('app', '请选择要上传的文件'),
        ];
    }

    /**
     * @inheritdoc
     * @return AttachmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AttachmentQuery(get_called_class());
    }
}
