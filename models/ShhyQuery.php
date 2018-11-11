<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Shhy]].
 *
 * @see Shhy
 */
class ShhyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Shhy[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Shhy|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
