<?php
include('templates/header2.inc.php');

 function renderForm($ID, $Gebruikersnaam, $Voornaam, $Tussenvoegsel, $Achternaam, $Straat, $Huisnummer, $Woonplaats, $Postcode, $Telefoonnummer, $Email, $error)
 {
 ?>

 <?php 

 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
<div class="container">
         <form class="form-signin" method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $ID; ?>"/>
            <h2>Klant bewerken</h2>
            <br />
            <p><strong>ID:</strong> <?php echo $ID; ?></p>
            <strong>Voornaam:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Voornaam; ?>" name="Voornaam" required/>
            <strong>Tussenvoegsel:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Tussenvoegsel; ?>" name="Tussenvoegsel"/>
            <strong>Achternaam:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Achternaam; ?>" name="Achternaam" required/>
            <strong>Straat:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Straat; ?>" name="Straat" required/>
            <strong>Huisnummer:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Huisnummer; ?>" name="Huisnummer" required/>
            <strong>Postcode:</strong><input type="text" maxlength="6" autocomplete="off" class="input-block-level" value="<?php echo $Postcode; ?>" name="Postcode" required/>
            <strong>Woonplaats:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Woonplaats; ?>" name="Woonplaats" required/>
            <strong>Telefoonnummer:</strong><input onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" maxlength="10" autocomplete="off" class="input-block-level" type="tel" value="<?php echo $Telefoonnummer; ?>" name="Telefoonnummer" required  />
            <strong>Email:</strong><input type="Email" autocomplete="off" class="input-block-level" value="<?php echo $Email; ?>" name="Email" required/>
            <strong>Bevestig Email:</strong><input type="Email" autocomplete="off" class="input-block-level" value="<?php echo $Email; ?>" name="Email2" required/>
            <strong>Gebruikersnaam:</strong><input type="text" autocomplete="off" class="input-block-level" value="<?php echo $Gebruikersnaam; ?>" name="Gebruikersnaam" required/>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/cklanten.php';" />
            <input class="btn btn-large btn-primary" type="submit" name="submit" value="Opslaan" />
         </form>
      </div>
 </form> 
 </body>
 </html> 
 <?php
 }


 include('config.php');
 
 if (isset($_POST['submit']))
 { 
 if (isset($_POST['ID']))
 {

 $ID = $_POST['ID'];
 $Voornaam = mysql_real_escape_string(htmlspecialchars($_POST['Voornaam']));
 $Tussenvoegsel = mysql_real_escape_string(htmlspecialchars($_POST['Tussenvoegsel']));
 $Achternaam = mysql_real_escape_string(htmlspecialchars($_POST['Achternaam']));
 $Straat = mysql_real_escape_string(htmlspecialchars($_POST['Straat']));
 $Huisnummer = mysql_real_escape_string(htmlspecialchars($_POST['Huisnummer']));
 $Postcode = mysql_real_escape_string(htmlspecialchars($_POST['Postcode']));
 $Woonplaats = mysql_real_escape_string(htmlspecialchars($_POST['Woonplaats']));
 $Telefoonnummer = mysql_real_escape_string(htmlspecialchars($_POST['Telefoonnummer']));
 $Email = mysql_real_escape_string(htmlspecialchars($_POST['Email']));
 $Gebruikersnaam = mysql_real_escape_string(htmlspecialchars($_POST['Gebruikersnaam']));

 
 if ($Voornaam == '' || $Tussenvoegsel == '' || $Achternaam == '' || $Straat == '' || $Huisnummer == '' || $Postcode = '' || $Woonplaats == '' || $Telefoonnummer == '' || $Email == ''|| $Gebruikersnaam == '')
 {

 $error = 'ERROR: Please fill in all required fields!';
 
 renderForm($ID, $Gebruikersnaam, $Voornaam, $Tussenvoegsel, $Achternaam, $Straat, $Huisnummer, $Woonplaats, $Postcode, $Telefoonnummer, $Email, $error);
 }
 else
 {

 mysql_query("UPDATE klant SET Voornaam='$Voornaam', Tussenvoegsel='$Tussenvoegsel', Achternaam='$Achternaam', Straat='$Straat', Huisnummer='$Huisnummer' Postcode='$Postcode', Telefoonnummer='$Telefoonnummer', Email='$Email', Gebruikersnaam='$Gebruikersnaam' WHERE ID='$ID'")
 or die(mysql_error()); 
 
 header("Location: cklanten.php"); 
 }
 }
 else
 {

 echo 'Error!';
 }
 }
 else

 {
 

 if (isset($_GET['ID']) && is_numeric($_GET['ID']) && $_GET['ID'] > 0)
 {

 $ID = $_GET['ID'];
 $result = mysql_query("SELECT * FROM klant WHERE ID=$ID")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 

 if($row)
 {
 

 $Voornaam = $row['Voornaam'];
 $Tussenvoegsel = $row['Tussenvoegsel'];
 $Gebruikersnaam = $row['Gebruikersnaam'];
 $Achternaam = $row['Achternaam'];
 $Straat = $row['Straat'];
 $Huisnummer = $row['Huisnummer'];
 $Woonplaats = $row['Woonplaats'];
 $Postcode = $row['Postcode'];
 $Telefoonnummer = $row['Telefoonnummer'];
 $Email = $row['Email'];

 renderForm($ID, $Gebruikersnaam, $Voornaam, $Tussenvoegsel, $Achternaam, $Straat, $Huisnummer, $Woonplaats, $Postcode, $Telefoonnummer, $Email, '');
 }
 else

 {
 echo "No results!";
 }
 }
 else
 
 {
 }
 }
?>
