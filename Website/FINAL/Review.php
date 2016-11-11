<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['login2'])){
  include 'NaviNoScroll.php';//Als de gebruiker NIET is ingelogd, wordt 'NaviNoScroll.php' opgehaald
  header('location: klogin.php');
  exit;
}
Else{
  include 'NaviNoScrollKlant.php'; //Als de gebruiker WEL is ingelogd, wordt 'NaviNoScrollKlant.php' opgehaald
};
?>
<html>
<body>
		<?php		
		include('Config.php');			//Haalt pagina config.php op.
		if  (isset($_POST["submit"])) {
			$Product =$_POST['Product'];
			$Cijfer =$_POST['Cijfer'];
			$Opmerking =$_POST['Opmerking'];
			}
		
		if (isset($_POST['submit'])){
			echo '<script language="javascript">';
			echo 'alert("Bedankt, uw review is verzonden.")';
			echo '</script>';
			echo '<meta http-equiv="refresh" content="0; url=kmenu.php" />';
			mysql_query("INSERT INTO `Review` (`ID`,`Cijfer`, `Opmerking`, `Product` ) 
		VALUES (NULL,'$Cijfer', '$Opmerking', '$Product')") or die(mysql_error());
		}
		?>
			<center>	
			<form action='Review.php' method= 'POST'>
		
			<h4>Selecteer het product dat je wilt beoordelen:</h4>
			<?php
            $result = mysql_query("SELECT * FROM product") 
            or die(mysql_error()); 
            echo '<select name="Product" required/>'; // Open your drop down box
            echo '<option value="" selected="selected" disabled="disabled">Selecteer Product</option>';
            while($row = mysql_fetch_array( $result )) {
              $Naam = $row['Naam'];
            echo '<option value="'.$Naam.'">'.$Naam.'</option>';
            }
            echo '</select>';// Close your drop down box
            ?>

			<h4>Geef het product een cijfer.</h4>
			<select name="Cijfer" required/>
			<option value="" selected="selected" disabled="disabled">Selecteer Cijfer</option>'
  			<option value="10">10</option>
  			<option value="9">9</option>
  			<option value="8">8</option>
  			<option value="7">7</option>
  			<option value="6">6</option>
  			<option value="5">5</option>
  			<option value="4">4</option>
  			<option value="3">3</option>
  			<option value="2">2</option>
  			<option value="1">1</option>
			</select> </br>
			
			</br>
			<h4>Wat vind jij van het product?</h4>
			<textarea name='Opmerking' rows="15" cols="50" required/></textarea></br>
			
			
			</br>
			<input type='submit' value="Verzenden" name="submit" />
			</center>
			</form>
	</body>
</html>

<?php include 'Footer2.php';					    	//Roept Footer aan ?>