<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Zjcs]].
 *
 * @see Zjcs
 */
class ZjcsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Zjcs[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Zjcs|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
