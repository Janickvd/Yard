<?php
include ('fun/functions.php');

if(isset($_POST['number']) == FALSE) {
    $_POST['number'] = NULL;
}
?>
<div id="kassa2">
    <form class="" method="post">
        <input type="hidden" name="form" value="0">
        <input type="search" name="search" placeholder="produchtcode" size="70%">
        <input type="number" name="number" placeholder="aantal" size="30%">
        <input type="submit" value="toevoegen"><br>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['form'] == 0) {
            if (isset($_SESSION['bon'])) {
                $search = $_POST['search'];
                $aantal = $_POST['number'];
                regel($search, $aantal, $dbconn);
            } else {
                $search = $_POST['search'];
                $aantal = $_POST['number'];
                bonAanmaken($search, $aantal, $dbconn);
                
            }
    } else { 
       $_SESSION['bon'] = NULL;
    }
}
include ("inc/footer.php");
?>
<div id="kassa1">
<?php
if (isset($_SESSION['bon'])) {
    ?>
    <table id="customers">
        <tr>
            <th>artikel id</th>
            <th>subtotaal</th>
            <th>aantal</th>
        </tr>
        <?php
}
if (isset($_SESSION['bon'])) {
    $bonId = $_SESSION['bon'];
    $query = mysqli_query($dbconn, "SELECT artikel_id, sub_totaal, aantal FROM bon_regel WHERE bon_id = '$bonId'");
    $aantal = mysqli_num_rows($query);
    $contentTable="";
    if ($aantal>0){ //controle of er wel wat opgehaald wordt...
        while ($row = mysqli_fetch_array($query)) {
            $contentTable.="<tr>                     
            <td>".$row['artikel_id']."</td>                       
            <td>".$row['sub_totaal']."</td>                       
            <td>".$row['aantal']."</td>                                          
        </tr>";
        }
    }
    else {
        $contentTable='<tr>
                            <td colspan="9">Geen gegevens om op te halen...</td>
                        </tr>';
    }
    
    $contentTable.='</table><br>';
    echo $contentTable;
    if (isset($_SESSION['total'])) {
        echo $_SESSION['total'];
    }
}
?>
<form class="" method="post">
        <input type="hidden" name="form" value="1">
        <input type="submit" value="afrekenen" class="afrekenen"><br>
</form>
</div>