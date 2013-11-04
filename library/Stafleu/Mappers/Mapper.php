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
     * @return \Zend_Db_Table_Abstract
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
     * @return \Stafleu\Models\Model
     */
    public function save(\Stafleu\Models\Model $model)
    {
        $data = $model->toArray();
        foreach ( $data as $key => $value ) {
            if ( is_array($value) ) {
                unset($data[$key]);
            }
        } // foreach

        $success = $model->getId();
        $id = $model->getId();
        if ( empty($id) ) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }

        return $model;
    } // save();

    /**
     * Removes the $model from DB
     *
     * @param \Stafleu\Models\Model $model
     * @return number
     */
    public function remove(\Stafleu\Models\Model $model)
    {
        return $this->getDbTable()->delete('id = ' . $model->getId());
    } // remove();

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
    public function fetchAll(array $where = array())
    {
        $resultSet = $this->getDbTable()->fetchAll($where);
        $entries   = array();

        $class = 'Stafleu\\Models\\' . substr(get_called_class(), strlen(__NAMESPACE__) + 1);
        foreach ($resultSet as $row) {
            $entries[] = new $class($row->toArray());
        } // foreach

        return $entries;
    } // fetchAll();

    /**
     * Returns the namespace of the called class
     */
    static public function getNamespace()
    {
        $parts = explode('\\', get_called_class());
        array_pop($parts);
        return implode('\\', $parts) . '\\';
    } // getNamespace();

    /**
     * Returns an other mapper that is in the same namespace as this mapper
     *
     * @param string $cls
     * @return \Stafleu\Mappers\Mapper
     */
    static public function getOtherMapper($cls)
    {
        $otherMapper = self::getNamespace() . $cls;
        return new $otherMapper;
    } // getOtherMapper();

} // end class Sheet