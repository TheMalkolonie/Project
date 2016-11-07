<!DOCTYPE html>
<html>
<body>
   
<?php
session_start();

if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
include('templates/header2.inc.php');
require('config.php');
$error = '';


if (isset($_POST['submit']))
{
 $Email = $_POST['Email'];
 $Email2 = $_POST['Email2'];
 $Wachtwoord = $_POST['Wachtwoord'];
 $Wachtwoord2 = $_POST['Wachtwoord2'];

   if($Email == $Email2 && $Wachtwoord == $Wachtwoord2)
 {
   
   $Voornaam = mysql_escape_string($_POST['Voornaam']);
   $Tussenvoegsel = mysql_escape_string($_POST['Tussenvoegsel']);
   $Gebruikersnaam = mysql_escape_string($_POST['Gebruikersnaam']);
   $Email = mysql_escape_string($_POST['Email']);
   $Email2 = mysql_escape_string($_POST['Email2']);
   $Wachtwoord = mysql_escape_string($_POST['Wachtwoord']);
   $Wachtwoord2 = mysql_escape_string($_POST['Wachtwoord2']);
   $Straat = mysql_escape_string($_POST['Straat']);
   $Huisnummer = mysql_escape_string($_POST['Huisnummer']);
   $Postcode = mysql_escape_string($_POST['Postcode']);
   $Woonplaats = mysql_escape_string($_POST['Woonplaats']);
   $Achternaam = mysql_escape_string($_POST['Achternaam']);
   $Telefoonnummer = mysql_escape_string($_POST['Telefoonnummer']);


   $Wachtwoord = md5($Wachtwoord);
   
   $check = mysql_query("SELECT * FROM klant WHERE Gebruikersnaam = '$Gebruikersnaam'")or die(mysql_error());
   if (mysql_num_rows($check)>=1) 
    echo '<p style="color: red; text-align: center">
     <font size="10"><b>Gebruikernaam is al in gebruik!</b></font>
     <br />
     <br />
      Klik <a href="kregister.php">hier</a> om terug te gaan.</b></font>
      </p>';
   
   else{
   mysql_query("INSERT INTO `klant` (`ID`, `Voornaam`, `Tussenvoegsel`, `Gebruikersnaam`, `Email`, `Wachtwoord`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Achternaam`, `Telefoonnummer`) VALUES (NULL, '$Voornaam', '$Tussenvoegsel', '$Gebruikersnaam', '$Email', '$Wachtwoord', '$Straat', '$Huisnummer', '$Postcode', '$Woonplaats', '$Achternaam', '$Telefoonnummer')") or die(mysql_error());
     echo '<p style="color: green; text-align: center">
     <font size="10"><b>Account geregistreerd!</b></font>
      </p>';
   header('Refresh: 3;url=cklanten.php');
   }
 }
 else{
       echo '<p style="color: red; text-align: center">
     <font size="10"><b>Sorry, uw Email of wachtwoord komt niet overeen. <br /></b></font>
      </p>';
  header('Refresh: 3;url=kregister.php');
 }




}
else{
$form = <<<EOT
      <!-- BEGIN OF CONTENT PART -->
      <div class="container">
         <form class="form-signin" method="POST" action="kregister.php">
            <h2>Klant registreren:</h2>
            <br />
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Voornaam" name="Voornaam" required/>
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Tussenvoegsel" name="Tussenvoegsel"/>
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Achternaam" name="Achternaam" required/>
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Straat" name="Straat" required/>
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Huisnummer" name="Huisnummer" required/>
            <input type="text" maxlength="6" autocomplete="off" class="input-block-level" placeholder="Postcode" name="Postcode" required/>
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Woonplaats" name="Woonplaats" required/>
            <input onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" maxlength="10" autocomplete="off" class="input-block-level" type="tel" placeholder="Telefoonnummer" name="Telefoonnummer" required  />
            <input type="Email" autocomplete="off" class="input-block-level" placeholder="Email" name="Email" required/>
            <input type="Email" autocomplete="off" class="input-block-level" placeholder="Bevestig Email" name="Email2" required/>
            <input type="text" autocomplete="off" class="input-block-level" placeholder="Gebruikersnaam" name="Gebruikersnaam" required/>
            <input type="password" class="input-block-level" placeholder="Wachtwoord" name="Wachtwoord" required/>
            <input type="password" class="input-block-level" placeholder="Bevestig wachtwoord" name="Wachtwoord2" required/>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/cklanten.php';" />
            <input class="btn btn-large btn-primary" type="submit" name="submit" value="Registreer" />
         </form>
      </div>
      <!-- END OF CONTENT PART -->
EOT;

echo $form;

}

?>
</div>

</body>
</html>