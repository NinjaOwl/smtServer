<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sh".
 *
 * @property string $id
 * @property string $nane
 * @property integer $e_show
 */
class Sh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['e_show'], 'integer'],
            [['nane'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '商会编号'),
            'nane' => Yii::t('app', '商会名称'),
            'e_show' => Yii::t('app', '显示企业详情'),
        ];
    }
}
