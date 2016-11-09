<!DOCTYPE html>
<title>Contactformulier</title>
<font size="3" face="arial">
	<body>
		<?php		
		if  (isset($_POST["submit"])) {
		include('config.php');
			$voornaam = $_POST['voornaam'];
			$achternaam= $_POST['achternaam'];
			$email=$_POST['email'];
			$telefoonnummer=$_POST['telefoonnummer'];
			$vraag=$_POST['vraag'];
			}
		
		if (isset($_POST['submit'])){
			mysql_query("INSERT INTO `contact` (`ID`, `voornaam`, `achternaam`, `email`,`telefoonnummer`,`vraag`) 
		VALUES (NULL,'$voornaam', '$achternaam','$email', '$telefoonnummer', '$vraag')") or die(mysql_error());
		}
		?>		
		<form action='Vraag.php' method= 'POST'>
			<center>Voornaam <br /><input type='text' name= 'voornaam' /> <br>
			Achternaam<br /> <input type= 'text' name= 'achternaam'/> <br />
			Email<br /> <input type= 'text' name= 'email'/> <br />
			Telefoonnummer<br /> <input type= 'text' name= 'telefoonnummer' /> <br />
			Vraag<br /> 
			<textarea name='vraag' rows="10" cols="30">test</textarea>
			     
			<br />
			<input type='submit' value="Stel u vraag!" name="submit" /></center>
		</form>
	</body>
</html>
