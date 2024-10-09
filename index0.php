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
// query
$result = Database::getData("SELECT * FROM eigenaars WHERE eigenaar = ?", $queryData);

echo "Seriele output (JSON) kan met echo:<BR>";
echo Database::jsonParse($result) . "<BR><BR>";
echo "Array output moet met var_dump():<BR>";
var_dump($result); echo "<BR><BR>";

// another query reading all data
// alternatieve query met INNER JOIN from 2 tables
echo "Another query using 2 tables:";
$result = Database::getData("SELECT eigenaar, bijnaam, games.gamenaam, games.opmerking FROM eigenaars INNER JOIN games ON eigenaars.id = games.id_eigenaar");
echo Database::jsonParse($result);