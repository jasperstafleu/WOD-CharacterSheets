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
     * @param unknown $location
     * @param unknown $names
     */
    public function addSheetElements($location, $names)
    {
        if ( !isset($this->sheetElements[$location]) ) {
            $this->sheetElements[$location] = array();
        }

        foreach ( $names as $name ) {
            $el = new \Zend_Form_Element_Text($name, array(
                    'label' => ucfirst($name),
                    'filters' => array('StringTrim'),
            ));
            $this->addElement($el);
            $this->sheetElements[$location] []= $el;
        } // foreach
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

} // end class Sheet
