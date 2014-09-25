<?php
require "config.php";

// die('dfd');
$client = new Zend\Soap\Client(WSDL_URL);
// $c = $client->getLastMethod();
// var_dump($c);die;
// var_dump($client);die;
try {
    $result1 = $client->method1();    
    var_dump($result1);
    $result2 = $client->method2("dfdfdf");    
    var_dump($result2);
} catch (SoapFault $e) {
    die('ERROR: [' . $e->faultcode . '] ' . $e->faultstring);
} catch (Exception $e) {
    die('ERROR: ' . $e->getMessage());
}

