<?php
session_start();
//initialiseren
define('HOST', 'localhost');
define('DATABASE', 'voorraadbeheer');
define('USER', 'root');
define('PASSWORD','');
$dbconn='';

//connectie maken
try {
    $dbconn=mysqli_connect(HOST, USER, PASSWORD, DATABASE);
}
catch (exception $e) {
    $dbconn=$e;
}
//In de variabele $dbconn zit nu de connectie naar jouw MySQL-database. Als we netjes willen programmeren, moeten we de connectie ook weer sluiten. We gebruiken hiervoor een functie.
//functie om de database te sluiten

function fnCloseDb($conn){
    if (!$conn==false)
    {
        mysqli_close($conn)
        or die('Sluiten MySQL-db niet gelukt...');
    }
} //end of fnCloseDb
?>