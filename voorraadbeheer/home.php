<?php
include ('inc/header.php');

echo '<main class="main-content">';
?>

<div id="voorraad">
    <form method="POST" action="voorraad.php">
        <button class="big" type="submit" name="voorraad" value="snacks">snacks</button>
        <button class="big" type="submit" name="voorraad" value="zuivel">zuivel</button>
        <button class="big" type="submit" name="voorraad" value="vlees">vlees</button>
        <button class="big" type="submit" name="voorraad" value=""></button>
        <button class="big" type="submit" name="voorraad" value="drinken">drinken</button>
        <button class="big" type="submit" name="voorraad" value="brood">brood</button>
        <button class="big" type="submit" name="voorraad" value="alcohol">alcohol</button>
        <button class="big" type="submit" name="voorraad" value="koek">koek</button>
    </form>
<?php
if (isset($_GET["page"])){
    $page = $_GET["page"];
}
else {
    $page=1;
}
?>