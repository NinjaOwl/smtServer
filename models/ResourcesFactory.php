<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resources_factory".
 *
 * @property integer $id
 * @property integer $resource_id
 * @property integer $factory_id
 */
class ResourcesFactory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resources_factory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource_id', 'factory_id'], 'required'],
            [['resource_id', 'factory_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'resource_id' => Yii::t('app', '资源编号'),
            'factory_id' => Yii::t('app', '工厂编号'),
        ];
    }

    

}
