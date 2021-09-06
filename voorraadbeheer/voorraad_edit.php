<?php
include ("inc/header.php");
include ("inc/menu.php");
$artikelnummer = $_GET["id"];
$query = "SELECT artikelnaam, artikelnummer, leverancier, artikelgroep, eenheid, prijs, aantal FROM voorraad WHERE artikelnummer = '$artikelnummer'";
$result = mysqli_query($dbconn, $query);
$row = mysqli_fetch_array($result)
?>
<div class="top" style="width:50%;margin-left:21%;">
<form class="login" method="POST">
    <label for="aantal">Hoeveel wilt u uit de database wegschrijven?</label><br><br>
    <input type="number" name="aantal" id="aantal"<br><br>
    <input type="submit" name="subtmit" value="submit"<br>
</form>

<?php
include ("inc/footer.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aantal = $row['aantal'] - $_POST['aantal'];
    if (empty($aantal)) {
        echo "niks ingevuld";
    } else {
        $query = mysqli_query($dbconn, "UPDATE voorraad SET aantal='($aantal)' WHERE artikelnummer=($artikelnummer)");
        if($query){
            echo "database bijgewerkt";
            header('refresh: 2; url=voorraad.php');
        }
        else {
            echo "error wissen uit database";
        }
    }
}
