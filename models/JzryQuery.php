<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Jzry]].
 *
 * @see Jzry
 */
class JzryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Jzry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Jzry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
