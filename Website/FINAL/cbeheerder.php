 <?php
session_start(); // sessie wordt gestart.
if(!isset($_SESSION['login'])) {
  header('location: alogin.php'); // Zodra klant pagina cbeheerder.php wil bereiken wordt deze doorverwezen naar alogin.php
  exit;
}
Else{
   include 'NaviNoScrollKlant.php'; // Menu balk wordt niet mee gescrolt.
}
include('templates/header2.inc.php'); // Haalt de CSS style bestanden op.
include('deletebeh.php'); // Functie om als administrator andere administrators te verwijderen.
include('editbeh.php'); // Funtie als administrator om andere administrators te wijzigen.
 ?>
<html>
<body>

<?php

  include('config.php'); // Maakt connectie met de database.

  $result = mysql_query("SELECT * FROM administrator") 
    or die(mysql_error());  

  echo "<center><h1><b>Administrators beheren</b></h1></center>"; //Tekst administrators beheren.
?>
<?php include('clockblack.php'); ?> <!-- Haalt de systeemtijd op  en zet deze in de menu.-->
  <?php
  echo "</br>";
  echo "</br>";
  echo "</br>";
  echo "<center><table border='1' cellpadding='5'></center>";
  echo "<center><tr> <th>id</th> <th>Gebruikersnaam</th> <th>Voornaam</th> <th>Tussenvoegsel</th> <th>Achternaam</th> <th>Straat</th> <th>Huisnummer</th> <th>Woonplaats</th> <th>Postcode</th> <th>Telefoonnummer</th> <th>Email</th> <th></th> <th></th></tr></center>";

  while($row = mysql_fetch_array( $result )) { // Haalt onderstaande gegevens op uit de database.
    
    echo "<tr>";
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['Gebruikersnaam'] . '</td>';
    echo '<td>' . $row['Voornaam'] . '</td>';
    echo '<td>' . $row['Tussenvoegsel'] . '</td>';
    echo '<td>' . $row['Achternaam'] . '</td>';
    echo '<td>' . $row['Straat'] . '</td>';
    echo '<td>' . $row['Huisnummer'] . '</td>';
    echo '<td>' . $row['Woonplaats'] . '</td>';
    echo '<td>' . $row['Postcode'] . '</td>';
    echo '<td>' . $row['Telefoonnummer'] . '</td>';
    echo '<td>' . $row['Email'] . '</td>';
    echo '<td><a href="editbeh.php?id=' . $row['id'] . '">Edit</a></td>';
    echo '<td><a href="deletebeh.php?id=' . $row['id'] . '">Delete</a></td>';
    echo "</tr>"; 
  } 

  echo "</table>";
?>
<p><a href="bregister.php">Voeg nieuwe beheerder toe</a></p> <!-- Doorverwijzing om nieuwe beheerder toetevoegen. -->
<br />
<br />
<br />
<center><input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/management.php';" /></center>

</body>
</html>