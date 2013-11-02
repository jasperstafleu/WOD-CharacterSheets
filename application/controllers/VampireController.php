<?php
class VampireController extends Zend_Controller_Action
{
    /**
     * The (default) mapper corresponding to this controller
     *
     * @var Stafleu\Mappers\VampireSheet
     */
    protected $mapper;

    /**
     * (non-PHPdoc)
     * @see Zend_Controller_Action::init()
     */
    public function init()
    {
        $this->mapper = new \Stafleu\Mappers\VampireSheet();
    } // init();

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->view->sheets = $this->mapper->fetchAll();
    } // indexAction();

    /**
     * Shows the sheet (form)
     */
    public function sheetAction()
    {
        $model = $this->mapper->find($this->_getParam('id'));
        $this->view->form = new Stafleu\Forms\VampireSheet;
        $this->view->form->populate($model->toArray());
    } // show();

} // end class VampireController

