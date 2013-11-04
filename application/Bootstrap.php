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

    protected function _initCache()
    {
        // First, set up the Cache
        $frontendOptions = array(
                'automatic_serialization' => true
        );

        $backendOptions  = array(
                'cache_dir'=> APPLICATION_PATH . '\..\cache'
        );

        $cache = Zend_Cache::factory('Core',
                'File',
                $frontendOptions,
                $backendOptions);

        Zend_Db_Table_Abstract::setDefaultMetadataCache($cache);
    } // _initCache();
}
