<?php
include ("inc/header.php");

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Voorraad</title>
        <link rel="stylesheet" type="text/css" href="css/voorraad.css">
    </head>

<div id="voorraad">
    <form method="POST" action="voorraad2.php">
        <button class="big" type="submit" name="voorraad" value="snacks" id="snacks">snacks</button>
        <button class="big" type="submit" name="voorraad" value="zuivel" id="zuivel">zuivel</button>
        <button class="big" type="submit" name="voorraad" value="vlees">vlees</button>
        <button class="big" type="submit" name="voorraad" value="brood en banket">brood en banket</button>
        <button class="big" type="submit" name="voorraad" value="drinken">drinken</button>
        <button class="big" type="submit" name="voorraad" value="brood">brood</button>
        <button class="big" type="submit" name="voorraad" value="alcohol">alcohol</button>
        <button class="big" type="submit" name="voorraad" value="koek">koek</button>
        <button class="big" type="submit" name="voorraad" value="groenten">groenten</button>
    </form>
</div>