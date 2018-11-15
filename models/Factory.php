<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factory".
 *
 * @property string $id
 * @property string $name
 * @property string $addr
 * @property string $tel
 * @property string $person
 */
class Factory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'person'], 'string', 'max' => 50],
            [['addr'], 'string', 'max' => 255],
            [['tel'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '编号'),
            'name' => Yii::t('app', '厂名称'),
            'addr' => Yii::t('app', '通信地址'),
            'tel' => Yii::t('app', '联系电话'),
            'person' => Yii::t('app', '责任人'),
        ];
    }
}
