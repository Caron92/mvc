<?php
$person = new \char19\Person\Person();


/**
 * Show off the autoloader using namespace.
 */
include(__DIR__ . "/bootstrap.php");
include(__DIR__ . "/autoload_namespace.php");

$object = new \char19\Person\Person("MegaMic", 42);
echo $object->details();
var_dump($object);
