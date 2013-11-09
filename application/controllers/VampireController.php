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

        if ( $this->getRequest()->isPost() ) {
            $sheet = new Stafleu\Models\Vampire\Sheet(array('name' => $this->getParam('name')));
            $this->mapper->save($sheet);
        }

        $this->view->form = new Zend_Form();

        $el = new Zend_Form_Element_Text('name', array('placeholder' => 'Add sheet'));
        $el->removeDecorator('HtmlTag')->removeDecorator('Label');
        $this->view->form->addElement($el);

        $el = new Zend_Form_Element_Submit('Add', array('class' => 'btn btn-sm btn-primary'));
        $el->removeDecorator('DtDdWrapper');
        $this->view->form->addElement($el);
        ;
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

        if ( !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
                && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'
        ) {
            // AJAX request: return JSON
            $this->_helper->json($model);
        } else {
            $this->view->form = new Stafleu\Forms\Vampire\Sheet;
            $this->view->form->populate($model->toArray());
            $this->view->maxRating = max(13 - $model->getGeneration(), 5);

            $poolsizes = array(4 => 50, 5 => 40, 6 => 30, 7 => 20, 8 => 15, 9 => 14,
                    10 => 13, 11 => 12, 12 => 11, 13 => 10);
            $this->view->maxPool = $poolsizes[$model->getGeneration()];

            $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/character-sheet.css'));
            $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/vampire-sheet.css'));
            $this->view->headScript()->appendFile($this->view->baseUrl('/js/sheet.js'));
        }
    } // show();

    /**
     * Adds a free field to a sheet
     */
    public function addFreeFieldAction()
    {
        if ( !($sheet = $this->mapper->find($this->_getParam('sheet'))) ) {
            throw new Zend_Exception('No such sheet found');
        }

        $ff = new Stafleu\Models\Vampire\FreeField(array(
           'sheet'      => $sheet->getId()
           , 'type'     => $this->_getParam('type')
           , 'name'     => $this->_getParam('name')
           , 'value'    => 1
        ));

        $ffMapper = new Stafleu\Mappers\Vampire\FreeField;
        $ffMapper->save($ff);

        $this->_helper->json($ff);
    } // addFreeFieldAction();

} // end class VampireController

