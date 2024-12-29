<?php
// enable all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// TODO maak scherm met data uit twee tabellen
include "includes/database.inc.php";

$sql = "SELECT eigenaars.eigenaar, eigenaars.bijnaam, games.gamenaam, games.opmerking
    FROM eigenaars, games 
    WHERE eigenaars.id = games.id_eigenaar";

$results = Database::getData($sql);

var_dump($results);

// TODO uitlezen met foreach()

// header van tebel maken html tabel opbouwen

// doorloop alle rijen foreach 

// per rij maak je een "regel" waarin alle velden straan (eingenaar, bijnaam, gamennaam en op) 
// en hoe maak ik een tabelregel;

// tabel afsluiten
