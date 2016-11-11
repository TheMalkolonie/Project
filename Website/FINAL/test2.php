 <?php
session_start();
include('templates/header2.inc.php');

if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
Else{
   include 'NaviNoScrollKlant.php';
}
include('config.php');
include('spatie.html');

$vind_teller = mysql_query("SELECT * FROM teller");

while($row = mysql_fetch_assoc($vind_teller)){
    $huidig_teller = $row['Test'];
    $nieuw_teller = $huidig_teller + 1;
    $update_teller = mysql_query("UPDATE `teller` SET `Test` = $nieuw_teller");

   $result = mysql_query("SELECT * FROM teller") 
    or die(mysql_error());
echo "<center><table border='1' cellpadding='5'></center>";
  echo "<center><tr> <th><a href=index.php>Homepagina</a></th><th><a href=Menukaart.php>Pizza pagina</a></th><th><a href=DessertPage.php>Dessert pagina</a></th><th><a href=DrankenPage.php>Dranken pagina</a></th><th><a href=SnackPage.php>Snack pagina</a></th><th><a href=test2.php>Test pagina</a></th></center>";
  while($row = mysql_fetch_array( $result )) {
    
    echo "<tr>";
    echo '<td><center>' . $row['Home'] . '</center></td>';
    echo '<td><center>' . $row['Pizza'] . '</center></td>';
    echo '<td><center>' . $row['Dessert'] . '</center></td>';
    echo '<td><center>' . $row['Drank'] . '</center></td>';
    echo '<td><center>' . $row['Snacks'] . '</center></td>';
    echo '<td><center>' . $row['Test'] . '</center></td>';
    echo "</tr>"; 
  }
    echo "</table>"; 
}
include('Footer2.php');
?>
<center><input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/management.php';" /></center>