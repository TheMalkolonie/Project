<?php
session_start();
if(!isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} ?>
<!DOCTYPE html>

<html>
<body>


<!--afbeelding die je ziet-->

<h2>  </h2>

<p align="center">
	
Uw eigen pizza samenstellen? Dat kan! <br />
Met onze pizza samensteller kan je nu zelf <br />
pizza maken, kies de ingredienten <br />
en klik op bestel. <br />
Het laastste wat U hoeft te doen is genieten <br />
wanneer u de pizza warm op eet! <br />

</p>



<!--Formulier om pizza samen te stellen:-->

<!--Bodems-->
<div align="center">
<form action="Bestel.php">
	
<?php
			include('config.php');
            $result = mysql_query("SELECT * FROM pizzaextra") 
            or die(mysql_error()); 
            echo '<select name="Bodem" required/>'; // Open your drop down box
            while($row = mysql_fetch_array( $result )) {
              $Bodem = $row['Bodem'];
            echo '<option value="'.$Bodem.'">'.$Bodem.'</option>';
            }
            echo '</select>';// Close your drop down box
?>	

<!--Sauzen-->

<?php
			include('config.php');
            $result = mysql_query("SELECT * FROM pizzaextra") 
            or die(mysql_error()); 
            echo '<select name="Saus" required/>'; // Open your drop down box
            while($row = mysql_fetch_array( $result )) {
              $Saus = $row['Saus'];
            echo '<option value="'.$Saus.'">'.$Saus.'</option>';
            }
            echo '</select>';// Close your drop down box
?>
	
<!--Bestel + aantal-->	
	
	<br />
	<input type="number" value="1" name="Aantal">
	<input type="submit" value="Bestel!"/>
</div>

<br />
<center>
7,95 euro!
</center>


<!--Ingredienten-->

	<br />
	
<div align="center">

<?php
include('config.php');
// Create connection
//Get data
$sql = "SELECT Ingredienten FROM pizzaextra";
$result = mysql_query("SELECT * FROM pizzaextra") 
            or die(mysql_error());
            while($row = mysql_fetch_array( $result )) {;
    // output data of each row{
        echo "<tr><td>" ."<input type='checkbox' value='$row[Ingredienten]'  name='$row[Ingredienten]' />"  .$row["Ingredienten"] ."</td></tr><br/>";   		
	}
	
    echo "</table>";
?>

</div>
</Form>

</style>
</head>
</html>
<?php include 'Footer2.php';	?>