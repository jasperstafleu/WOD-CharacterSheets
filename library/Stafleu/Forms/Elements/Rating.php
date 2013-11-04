<?php
namespace Stafleu\Forms\Elements;

class Rating extends \Zend_Form_Element_Radio
{
    /**
     * Constructor: resets the decorator and creates a new element view
     */
    public function __construct($spec, $options = null)
    {
        $scriptPath = __DIR__ . DIRECTORY_SEPARATOR . 'views';
        if ( !in_array($scriptPath, $this->getView()->getScriptPaths()) ) {
            $this->getView()->addScriptPath($scriptPath);
        }

        parent::__construct($spec, $options);

        $this->removeDecorator('ViewHelper')
            ->removeDecorator('HtmlTag')
            ->addDecorator('ViewScript')
        ;
        $this->viewScript = 'rating.phtml';
     } // __construct();
} // end class Rating