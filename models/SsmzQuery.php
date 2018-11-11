<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ssmz]].
 *
 * @see Ssmz
 */
class SsmzQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Ssmz[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ssmz|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
