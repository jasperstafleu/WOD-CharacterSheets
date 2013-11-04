<?php
namespace Stafleu\Mappers;

class Sheet extends Mapper
{
    /**
     * (non-PHPdoc)
     * @see \Stafleu\Mappers\Mapper::save()
     */
    public function save(\Stafleu\Models\Model $model)
    {
        $ret = parent::save($model);

        $modelArray = $model->toArray();
        self::getOtherMapper('FreeField')->saveFreeFields($model);

        return $ret;
    } // save();

    /**
     * (non-PHPdoc)
     * @see \Stafleu\Mappers\Mapper::find()
     */
    public function find($id)
    {
        $ret = parent::find($id);

        // add the free fields
        $fields = self::getOtherMapper('FreeField')->fetchAll(array('sheet' => $id));
        $ret->addFreeFields($fields);

        return $ret;
    } // find();

    /**
     * (non-PHPdoc)
     * @see \Stafleu\Mappers\Mapper::fetchAll()
     */
    public function fetchAll(array $where = array())
    {
        $ret = parent::fetchAll($where);
        return $ret;
    } // fetchAll();

} // end class Sheet