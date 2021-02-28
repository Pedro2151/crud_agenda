<?php

ob_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'crud_agenda');
define('DB_USER', 'root');
define('DB_PASS', '');

define('PATH', realpath(__DIR__).'/');

function autoload($className)
{
    
    $classNamePath = explode('\\', $className);
    $className = array_pop($classNamePath);
    $namespace = implode('\\', $classNamePath);
    $fileName  = $namespace . '\\' . $className . '.php';

    $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $fileName);

    require_once($fileName);
}
spl_autoload_register('autoload');