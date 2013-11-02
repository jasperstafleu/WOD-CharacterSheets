<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Adds the Stafleu library to the autoloading
     */
    protected function _initStafleuLibrary()
    {
        $autoloader = Zend_Loader_Autoloader::getInstance();
        $autoloader->registerNamespace('Stafleu\\');
    } // _initStafleuLibrary();
}
