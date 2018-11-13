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
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'addr' => Yii::t('app', 'Addr'),
            'tel' => Yii::t('app', 'Tel'),
            'person' => Yii::t('app', 'Person'),
        ];
    }
}
