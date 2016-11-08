 <?php
 session_start();
if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
Else{
   include 'NaviScrollKlant.php';
}
include('templates/header2.inc.php');
include('deletebeh.php');
include('editbeh.php');
 ?>
<html>
<body>

<?php

  include('config.php');

  $result = mysql_query("SELECT * FROM product") 
    or die(mysql_error());  

  echo "<center><h1><b>Product beheer</b></h1></center>";
?>
<?php include('clockblack.php'); ?>
  <?php
  echo "</br>";
  echo "</br>";
  echo "</br>";
  echo "<center><table border='1' cellpadding='5'></center>";
  echo "<center><tr> <th>ID</th> <th>Catagorie</th> <th>Naam</th> <th>Product Afbeelding</th> <th>Product Beschrijving</th> <th>Prijs</th> <th></th> <th></th></tr></center>";

  while($row = mysql_fetch_array( $result )) {
    $msg = '<td>' . $row['Product_Beschrijving'] . '</td>';

  if (strlen($msg) > 100) {

    $msgCut = substr($msg, 0, 100);

    $msg = substr($msgCut, 0, strrpos($msgCut, ' ')).'...</a>'; 

}

    echo "<tr>";
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['Catagorie'] . '</td>';
    echo '<td>' . $row['Naam'] . '</td>';
    echo '<td>';?> <center><img src=<?php $row['Product_Afbeelding']; echo '<td><br />' . $row['Product_Afbeelding'] . '</td>'; ?></center> <?php echo '</td>';
    echo $msg;
    echo '<td>&euro;' . $row['Prijs'] . '</td>';
    echo '<td><a href="editprod.php?ID=' . $row['ID'] . '">Edit</a></td>';
    echo '<td><a href="delprod.php?ID=' . $row['ID'] . '">Delete</a></td>';
    echo "</tr>"; 
  } 

  echo "</table>";
?>
<p><a href="addprod.php">Voeg nieuwe product toe</a></p>
<br />
<br />
<br />
<center><input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/management.php';" /></center>

</body>
</html>


