<?php
namespace Stafleu\Models;

abstract class Model
{
    /**
     * The available fields for this model
     *
     * -@var string[][]
     */
    private static $__protectedFields = array();

    /**
     * Constructor
     *
     * @param array $fields    The fields passed as array will be set in the model
     */
    public function __construct(array $fields = array())
    {
        $this->populate($fields);
    } // __construct();

    /**
     * Populates the model, overwriting when needed
     *
     * @param array $fields
     * @return self
     */
    public function populate(array $fields = array())
    {
        foreach ( $fields as $field => $value ) {
            try {
                $method = 'set' . ucfirst($field);
                $this->$method($value);
            } catch ( \Zend_Exception $e ) {
                // catch exception: non-existing field
            }
        } // foreach

        return $this;
    } // populate();

    /**
     * Returns this model as an array
     *
     * @return array
     */
    public function toArray()
    {
        $ret = array();

        foreach ( self::__getFields() as $field ) {
            $ret[$field] = $this->$field;
        } // foreach

        return $ret;
    } // toArray();

    /**
     * Magic caller
     *
     * @param string $method
     * @param array $arguments
     */
    public function __call($method, array $arguments)
    {
        switch ( true ) {
            case strpos($method, 'set') === 0 :
                $field = lcfirst(substr($method, 3));
                if ( !in_array($field, self::__getFields()) ) {
                    throw new \Zend_Exception('Field ' . $field . ' does not exist in ' . get_called_class());
                }
                $this->$field = reset($arguments);
                return $this;
            case strpos($method, 'get') === 0 :
                $field = lcfirst(substr($method, 3));
                if ( !in_array($field, self::__getFields()) ) {
                    throw new \Zend_Exception('Field ' . $field . ' does not exist in ' . get_called_class());
                }
                return $this->$field;
        } // switch

        throw new \Zend_Exception('Unknown method ' . $method);
    } // __call();

    /**
     * Returns the fields for this model
     */
    static private function __getFields()
    {
        $cls = get_called_class();
        if ( empty(self::$__protectedFields[$cls]) ) {
            $refl = new \ReflectionClass($cls);
            foreach ( $refl->getProperties(\ReflectionProperty::IS_PROTECTED) as $field ) {
                self::$__protectedFields[$cls] []= $field->getName();
            } // foreach
        }
        return self::$__protectedFields[$cls];
    } // __getFields();
} // end class Model