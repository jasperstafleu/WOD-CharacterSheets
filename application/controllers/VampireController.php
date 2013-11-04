<?php
class VampireController extends Zend_Controller_Action
{
    /**
     * The (default) mapper corresponding to this controller
     *
     * @var Stafleu\Mappers\Vampire\Sheet
     */
    protected $mapper;

    /**
     * (non-PHPdoc)
     * @see Zend_Controller_Action::init()
     */
    public function init()
    {
        $this->mapper = new \Stafleu\Mappers\Vampire\Sheet();
        $this->view->headTitle('Character Sheets');
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
        if ( $this->getRequest()->isPost() ) {
            $this->mapper->save($model->populate($this->getRequest()->getPost()));
            if ( $model->getId() !== $this->getParam('id') ) {
                return $this->_helper->redirector('/vampire/sheet/id/' . $model->getId());
            }
        }

        $this->view->form = new Stafleu\Forms\Vampire\Sheet;
        $this->view->form->populate($model->toArray());
        $this->view->maxRating = max(13 - $model->getGeneration(), 5);

        $this->view->headLink()->appendStylesheet('/css/character-sheet.css');
        $this->view->headLink()->appendStylesheet('/css/vampire-sheet.css');
    } // show();

} // end class VampireController

