#!/usr/bin/php
<?php 
set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            '.',
            __DIR__ . '/vendors/PHP-Daemon',
            get_include_path()
        )        
    )
);

require_once 'Zend/Loader/Autoloader.php';

$loader = Zend_Loader_Autoloader::getInstance();
$loader->registerNamespace('Core_');

require_once 'Core/error_handlers.php';
require_once 'Multiple.php';

// The daemon needs to know from which file it was executed.
Multiple::setFilename(__FILE__);

// The run() method will start the daemon loop.
Multiple::getInstance()->run();
