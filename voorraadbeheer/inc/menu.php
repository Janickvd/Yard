<?php
require_once ('inc/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klantgegevens</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="img/achtergrond-rood.jpg">
<!-- voor de opmaak zetten we alles in container -->
<div class="container">
<?php
// include menu.php
// include header.php

// controle ingelogd 
$autRol=isset($_SESSION['rol']) ? strtolower($_SESSION['rol']) : '';
$inlognaam=isset($_SESSION['inlognaam']) ? $_SESSION['inlognaam'] : '';
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
// samenstellen menu 
$menu=''; 


// op basis van rol menu tonen 
switch ($autRol){ 
    case 'directie': 
        $menu='<nav class="navbar"> 
        <ul>
            <li><a href="voorraad.php">Voorraadbeheer</a></li> 
            <li><a href="kassa.php">Kassa</a></li>
            <li><a href="toevoegen.php">CSV-bestand toevoegen</a></li> 
            <li><a href="uitloggen.php">Uitloggen</a></li> 
        </ul> 
        </nav>'; 
        break; 
    case 'beheerder': 
        $menu='<nav> 
        <ul>
            <li><a href="voorraad.php">Voorraadbeheer</a></li>
            <li><a href="kassa.php">Kassa</a></li>
            <li><a href="toevoegen.php">CSV-bestand toevoegen</a></li> 
            <li><a href="uitloggen.php">Uitloggen</a></li> 
        </ul> 
        </nav>'; 
        break; 
    case 'kassamedewerker': 
        $menu='<nav> 
        <ul> 
            <li><a href="uitloggen.php">Uitloggen</a></li> 
        </ul> 
        </nav>'; 
        break; 
    default: 
        $menu=''; 
} 

echo $menu; 

?>