<?php
include("inc/header.php"); 
?>
<div class="top form">
<form class="login" method="post" enctype="multipart/form-data">
<label>voeg hier je bestand in</label><br><br>
<input type="file" accept=".csv" name="csv"><br><br>
<input type="submit" name="submit" value="import"><br> 
</form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = file($_FILES['csv']['tmp_name']);
    foreach ($file as $k) {
        $csv[] = explode(';',$k);
    }
    $scv = array_shift($csv);
    print_r($csv);
    foreach($csv as &$value) {
        $artikelnummer = $value[0];
        $artikelnaam = $value[1];
        $leverancier = $value[2];
        $artikelgroep = $value[3];
        $prijs = $value[4];
        $eenheid = $value[5];
        $aantal = $value[6];
        $query = mysqli_query($dbconn, "SELECT aantal FROM vooraad WHERE artikelnummer = '$artikelnummer'");
        $aantal2 = mysqli_num_rows($query);
        $row = mysqli_fetch_array($query);
        if($aantal2 <= 0) {
            $query = mysqli_query($dbconn, "INSERT INTO Vooraad (artikelnummer, artikelnaam, leverancier, artikelgroep, prijs, eenheid, aantal)
            VALUES ('$artikelnummer', '$artikelnaam', '$leverancier', '$artikelgroep', '$prijs', '$eenheid', '$aantal');");
            if($query){
                echo "database bijgewerkt";
                header('refresh: 2, url=voorraad.php');
            } 
            else {
                echo "error toevoegen aan database";
            }
        } else {
            $aantal = intval($aantal) + intval($row[0]);
            $qeury = mysqli_query($dbconn, "UPDATE vooraad set aantal='{$aantal}' where artikelnummer={$artikelnummer}"); 
            if($query){
                echo "database bijgewerkt";
                header('refresh: 2, url=voorraad.php');
            } 
            else {
                echo "error toevoegen aan database";
            }
        }
    }
    $artikelnummer = $csv[0];
    $artikelnaam  = $line[1];
    $leverancier  = $line[2];
    $artikelgroep = $line[3];
    $prijs = $line[4];
    $eenheid = $line[5];
    $aantal = $line[6];
}
include("inc/footer.php");
?>