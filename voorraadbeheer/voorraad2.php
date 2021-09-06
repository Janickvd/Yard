<?php
include ("inc/header.php");
?>

<table id="customers">
    <tr>
        <th>artikelnaam</th>
        <th>artikelnummer</th>
        <th>leverancier</th>
        <th>artikelgroep</th>
        <th>eenheid</th>
        <th>prijs</th>
        <th>aantal</th>
    </tr>
<?php
$voorraad = $_POST['voorraad'];
$query = "SELECT artikelnaam, artikelnummer, leverancier, artikelgroep, eenheid, prijs, aantal FROM voorraad WHERE artikelgroep = '$voorraad'";
$result = mysqli_query($dbconn, $query);
$aantal = mysqli_num_rows($result);
$contentTable="";
if ($aantal > 0) {
    while ($row = mysqli_fetch_array($result)) {
    $contentTable.="<tr>
        <td>".$row['artikelnaam']."</td>
        <td>".$row['artikelnummer']."</td>
        <td>".$row['leverancier']."</td>
        <td>".$row['artikelgroep']."</td>
        <td>".$row['eenheid']."</td>
        <td>".$row['prijs']."</td>
        <td>".$row['aantal']."</td>
    </tr>";
    }
}
?>