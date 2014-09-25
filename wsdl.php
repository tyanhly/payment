<?php

require "config.php";
$wsdl = new Zend\Soap\AutoDiscover();

// attach SOAP service class
$wsdl->setClass("MyClass");

// set SOAP action URI
$wsdl->setUri(SOAP_URL);
// handle request
$wsdl->handle();