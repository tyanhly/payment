<?php
require "config.php";
/****************************************************************************/
$options = array(
    'soap_version' => SOAP_1_2, //SOAP_1_1
//     'actor' => SOAP_URL,
//     'classmap' => '',
// //     'encoding' => '',
//     'wsdl' => '',
);

$server = new Zend\Soap\Server(WSDL_URL, $options);
// Bind Class to Soap Server
$server->setClass('MyClass');

// // Bind already initialized object to Soap Server
$server->setObject(new MyClass());

$server->handle();

