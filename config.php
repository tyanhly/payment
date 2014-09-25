<?php

require 'vendor/autoload.php';
require 'MyClass.php';


/**************************************************************************/

// die('config');
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set("soap.wsdl_cache_enabled", 0);


/**************************************************************************/
define('WSDL_URL', 'http://localhost/php/api/wsdl.php');
define('SOAP_URL', 'http://localhost/php/api/soap.php');


// die('dfd');