<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Nyrbt]].
 *
 * @see Nyrbt
 */
class NyrbtQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Nyrbt[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Nyrbt|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
