<?php
// enable all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// load database class
include 'includes/database.inc.php';

// test to check database settings
// this part is for setup reasons only and not part of the application

$queryData = array("Jason");
var_dump($queryData);
$result = Database::getData("SELECT * FROM eigenaars WHERE eigenaar = ?", $queryData);

var_dump($result);