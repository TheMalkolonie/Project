!DOCTYPE html>
<title>Contactformulier</title>
<font size="3" face="arial">
	<body>
		
		<?php		
		include('Config_Review.php');			//Haalt pagina config_review.php op.
		if  (isset($_POST["submit"])) {
			$Cijfer =$_POST['Cijfer'];
			$Opmerking =$_POST['Opmerking'];
			}
		

		if (isset($_POST['submit'])){
			mysql_query("INSERT INTO `Review` (`ID`,`Cijfer`, `Opmerking`) 
		VALUES (NULL,'$Cijfer', '$Opmerking')") or die(mysql_error());
		}
		?>
			<center>	
			<form action='Plaats_Review.php' method= 'POST'>
			
			<h4>Geef het product een cijfer.</h4>
			<select name="Cijfer">
			<option value="0">-- Please select -- </option>
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
			<input type='text' name= 'Opmerking' /> </br>
			
			
			</br>
			<input type='submit' value="Verzenden" name="submit" />
			</center>
			</form>
	</body>
</html>
