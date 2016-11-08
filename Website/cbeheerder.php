 <?php
session_start();
include('templates/header2.inc.php');
include('deletebeh.php');
include('editbeh.php');

if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;

  }
?>
<html>
<body>

<?php

  include('config.php');

  $result = mysql_query("SELECT * FROM administrator") 
    or die(mysql_error());  

  echo "<center><h1><b>Administrators beheren</b></h1></center>";
?>
<?php include('clockblack.php'); ?>
  <?php
  echo "</br>";
  echo "</br>";
  echo "</br>";
  echo "<center><table border='1' cellpadding='5'></center>";
  echo "<center><tr> <th>ID</th> <th>Gebruikersnaam</th> <th>Voornaam</th> <th>Tussenvoegsel</th> <th>Achternaam</th> <th>Straat</th> <th>Huisnummer</th> <th>Woonplaats</th> <th>Postcode</th> <th>Telefoonnummer</th> <th>Email</th> <th></th> <th></th></tr></center>";

  while($row = mysql_fetch_array( $result )) {
    
    echo "<tr>";
    echo '<td>' . $row['ID'] . '</td>';
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
    echo '<td><a href="editbeh.php?ID=' . $row['ID'] . '">Edit</a></td>';
    echo '<td><a href="deletebeh.php?ID=' . $row['ID'] . '">Delete</a></td>';
    echo "</tr>"; 
  } 

  echo "</table>";
?>
<p><a href="bregister.php">Voeg nieuwe beheerder toe</a></p>
<br />
<br />
<br />
<center><input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/management.php';" /></center>

</body>
</html>


