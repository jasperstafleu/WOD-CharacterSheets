<?php
namespace Stafleu\Forms;

abstract class Sheet extends \Zend_Form
{
    /**
     * The sheet elements
     *
     * @var array
     */
    protected $sheetElements = array();

    /**
     * Adds a sheet element to the
     * @param string  $location
     * @param array $names
     * @return self
     */
    public function addSheetElements(
            $location,
            $names,
            $fieldClass = 'Stafleu\\Forms\\Elements\\Rating')
    {
        if ( !isset($this->sheetElements[$location]) ) {
            $this->sheetElements[$location] = array();
        }

        foreach ( $names as $name ) {
            $belongsTo = null;
            if ( ($first = strpos($name, '[')) !== false ) {
                $belongsTo = substr($name, 0, $first);
                $name = substr($name, $first + 1, -1);
            }

            $args = array(
                    'label' => ucfirst(preg_replace('/[A-Z]/', ' $0', $name)),
                    'filters' => array('StringTrim'),
                    'belongsto' => $belongsTo,
            );

            $el = new $fieldClass($name, $args);

            if ( $el instanceof \Zend_Form_Element_Radio ) {
                $el->addMultiOptions(array(0,1,2,3,4,5,6,7,8,9,10))
                    ->setSeparator('')
                ;
            }

            $this->addElement($el);
            $this->sheetElements[$location] []= $el;
        } // foreach
        return $this;
    } // addElements();

    /**
     * Returns the sheet elements that were set at $location
     * @param unknown $location
     * @return multitype:
     */
    public function getSheetElements($location)
    {
        return $this->sheetElements[$location];
    } // getSheetElements();

    /**
     * Creates and returns an submit button
     *
     * @return \Zend_Form_Element_Submit
     */
    public function getSubmit()
    {
        $submit = new \Zend_Form_Element_Submit('submit', array(
                'ignore' => true,
                'label' => 'Opslaan'
        ));
        $this->addElement($submit);

        return $submit;
    } // getSubmit();

    /**
     * Adds the free fields for this model
     *
     * @param string $type
     * @param array $values
     * @return self
     */
    public function addFreeFields($type, array $values = array())
    {
        $values = array_filter($values);
        $withPrefix = array();
        foreach ( $values as $key => $value ) {
            $withPrefix[$type . '[' . $key . ']'] = $value;
        }
        $names = array_keys($withPrefix);
        $this->addSheetElements($type, $names);
        $this->populate($values);
        return $this;
    } // addFreeFields();

    /**
     * (non-PHPdoc)
     * @see Zend_Form::populate()
     */
    public function populate(array $fields = array())
    {
        $flat = array();
        foreach ( $fields as $field => $value ) {
            if ( is_array($value) ) {
                $this->addFreeFields($field, $value);
            } else {
                $flat[$field] = $value;
            }
        } // foreach
        return parent::populate($flat);
    } // populate();

} // end class Sheet
