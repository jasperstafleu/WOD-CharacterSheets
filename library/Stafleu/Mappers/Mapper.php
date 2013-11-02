<?php
namespace Stafleu\Mappers;

class Mapper
{
    /**
     * The DbTable
     * @var Zend_Db_Table_Abstract
     */
    protected $dbTable = null;

    /**
     * Returns the DbTable
     *
     * @throws \Zend_Exception
     */
    public function getDbTable()
    {
        if ( !isset($this->_dbTable) ) {
            $dbTable = 'Stafleu\\DbTables\\' . substr(get_called_class(), strlen(__NAMESPACE__) + 1);
            $this->_dbTable = new $dbTable;
        }
        return $this->_dbTable;
    } // getDbTable();

    /**
     * Saves the model (upsert)
     * @param \Stafleu\Models\Model $model
     */
    public function save(\Stafleu\Models\Model $model)
    {
        $data = $model->toArray();

        if ( null === ($id = $model->getId()) ) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    } // save();

    /**
     * Retrieves the model with id $id from Db
     *
     * @param integer $id
     * @return Stafleu\Models\Model
     */
    public function find($id)
    {
        $result = $this->getDbTable()->find($id);
        if ( !count($result) ) {
            return;
        }

        $row = $result->current();

        $class = 'Stafleu\\Models\\' . substr(get_called_class(), strlen(__NAMESPACE__) + 1);
        return new $class($row->toArray());
    } // find();

    /**
     * Retrieves all models from DB
     *
     * @return multitype:Stafleu\Models\Model
     */
    public function fetchAll()
    {
        $resultSet = $this->getDbTable()->fetchAll();
        $entries   = array();

        $class = 'Stafleu\\Models\\' . substr(get_called_class(), strlen(__NAMESPACE__) + 1);
        foreach ($resultSet as $row) {
            $entries[] = new $class($row->toArray());
        } // foreach

        return $entries;
    } // fetchAll();

} // end class Sheet