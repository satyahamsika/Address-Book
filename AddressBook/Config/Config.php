<?php
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'aspire@123');
    define('DB_NAME', 'addressbook');
    define('DS', DIRECTORY_SEPARATOR);
    define('HOME', dirname($_SERVER['DOCUMENT_ROOT'])); 
    define('APPHOME', HOME . '/Application');
    require_once "../../AddressBook/Public/Logger.php";
    function __autoload($class)
    {
        if (file_exists(APPHOME . DS . 'Models' . DS . $class . '.php')) {
            require_once APPHOME . DS . 'Models' . DS . $class . '.php';
        } elseif (file_exists(APPHOME . DS . 'Controllers' . DS . $class . '.php')) {
            require_once APPHOME . DS . 'Controllers'  . DS . $class . '.php';
        } 
    }
?>




