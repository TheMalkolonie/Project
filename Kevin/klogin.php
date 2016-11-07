<?php
session_start();
require('config.php');
include('templates/header2.inc.php');
$error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $Gebruikersnaam = mysql_real_escape_string( $_POST['username']);
   $Wachtwoord = mysql_real_escape_string( md5($_POST['password']) );
   
   if($Gebruikersnaam !== '' && $Wachtwoord !== '') {
      $_SESSION['login2'] = true;
      $_SESSION['Gebruikersnaam2'] = $Gebruikersnaam;
   
      $checkdb = "SELECT * FROM klant WHERE Gebruikersnaam = '$Gebruikersnaam' AND Wachtwoord = '$Wachtwoord'";
      $resultaat = mysql_query($checkdb);
      if(mysql_num_rows($resultaat) >= 1){
         header('Location: kmenu.php');
      }else{
         $error = 'Gebruikersnaam of Wachtwoord is onjuist';
         include('klogintpl.php');
      }
   
   } else {
      $error = 'Gebruikersnaam of Wachtwoord is leeg';
      include('klogintpl.php');
   }
} else {
   include('klogintpl.php');
include('templates/footer.inc.php');
}
?>