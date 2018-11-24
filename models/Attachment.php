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
 * @property integer $createTime
 * @property string $createUser
 */
class Attachment extends \yii\db\ActiveRecord
{
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
            [['rid', 'size', 'createTime'], 'integer'],
            [['name', 'createUser'], 'string', 'max' => 50],
            [['desc', 'url'], 'string', 'max' => 255],
            [['suffix'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rid' => 'Rid',
            'name' => 'Name',
            'desc' => 'Desc',
            'suffix' => 'Suffix',
            'size' => 'Size',
            'url' => 'Url',
            'createTime' => 'Create Time',
            'createUser' => 'Create User',
        ];
    }
}
