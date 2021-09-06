<?php
// if ($_POST['form'] == 0) {
            // if (isset($_SESSION['bon'])) {
            //     $search = $_POST['search'];
            //     $aantal = $_POST['number'];
            //     $bonId = $_SESSION['bon'];
            //     $qeury = mysqli_query($dbconn, "INSERT INTO bon_regel (bon_id, artikel_id, sub_totaal, aantal) VALUES($bonId, $search, 1, $aantal)");
            //     $query =  mysqli_query($dbconn, "SELECT aantal FROM voorraad WHERE artikelnummer = '$search'");
            //     $row = mysqli_fetch_array($query);
            //     $aantal = $row['aantal'] - $aantal;
            //     $qeury = mysqli_query($dbconn, "UPDATE voorraad set aantal='{$aantal}' where artikelnummer={$search}"); 
//             } else {
//             $inlognaam = $_SESSION['inlognaam'];
//             $query = mysqli_query($dbconn, "SELECT id FROM gebruiker WHERE inlognaam = '$inlognaam'");
//             $row = mysqli_fetch_array($query);
//             $row = $row['id'];
//             $search = $_POST['search'];
//             $aantal = $_POST['number'];
//             $qeury = mysqli_query($dbconn, "INSERT INTO bon (gebruiker_id) VALUES('$row')");
//             $qeury = mysqli_query($dbconn, "SELECT bon_id FROM bon ORDER BY datum DESC LIMIT 1");
//             $row = mysqli_fetch_array($qeury);
//             print_r ($row);
//             $_SESSION['bon'] = $row['bon_id'];
//             $bonId = $_SESSION['bon'];
//             echo $bonId;
//             echo $row['bon_id'];
//             $qeury = mysqli_query($dbconn, "INSERT INTO bon_regel (bon_id, artikel_id, sub_totaal, aantal) VALUES($bonId, $search, 1, $aantal)");
//             $_SESSION['bon'] = $bonId;
            
//             }
//     } else { 
//     }
function regel($search, $aantal, $dbconn)
{

        $prijs = mysqli_query($dbconn, "SELECT prijs FROM voorraad WHERE artikelnummer = '$search'");
        $prijs = mysqli_fetch_array($prijs);
        $prijs = $prijs['prijs'];
    
        $totalp = $prijs * $aantal;
        
        $total = $_SESSION['total'] + $totalp;
     
         
        $_SESSION['total'] = $total;
        $bonId = $_SESSION['bon'];
        $qeury = mysqli_query($dbconn, "INSERT INTO bon_regel (bon_id, artikel_id, sub_totaal, aantal) VALUES($bonId, $search, $totalp, $aantal)");
        $query =  mysqli_query($dbconn, "SELECT aantal FROM voorraad WHERE artikelnummer = '$search'");
        $row = mysqli_fetch_array($query);
        $aantal = $row['aantal'] - $aantal;
        $qeury = mysqli_query($dbconn, "UPDATE voorraad set aantal='{$aantal}' where artikelnummer={$search}"); 

}
function bonAanmaken($search, $aantal, $dbconn)
{
    $prijs = mysqli_query($dbconn, "SELECT prijs FROM voorraad WHERE artikelnummer = '$search'");
    $prijs = mysqli_fetch_array($prijs);
    $prijs = $prijs['prijs'];
    
    $totalp = $prijs * $aantal;
    
    $total = $totalp;
    
    $inlognaam = $_SESSION['inlognaam'];
    $query = mysqli_query($dbconn, "SELECT id FROM gebruiker WHERE inlognaam = '$inlognaam'");
    $row = mysqli_fetch_array($query);
    $row = $row['id'];
    $qeury = mysqli_query($dbconn, "INSERT INTO bon (gebruiker_id) VALUES('$row')");
    $qeury = mysqli_query($dbconn, "SELECT bon_id FROM bon ORDER BY datum DESC LIMIT 1");
    $row = mysqli_fetch_array($qeury);
    $_SESSION['bon'] = $row['bon_id'];
    $bonId = $_SESSION['bon'];
    $qeury = mysqli_query($dbconn, "INSERT INTO bon_regel (bon_id, artikel_id, sub_totaal, aantal) VALUES($bonId, $search, $totalp, $aantal)");
    $_SESSION['bon'] = $bonId;
    $_SESSION['total'] = $total;
}

?>