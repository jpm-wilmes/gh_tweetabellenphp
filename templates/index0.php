<?php
// Test and demo program for using database.inc.php. Connection, data retrieval 
// and two-table query including INNER JOIN are included

// 2024 Jeroen Wilmes

// enable all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// load database class
include '../includes/database.inc.php';

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
// So syntax SELECT table1.field, table1.field,..., table2.field, .... FROM table1 INNER JOIN table2 ON table1.id = table2.field.fk
echo Database::jsonParse($result);