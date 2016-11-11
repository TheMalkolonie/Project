<?php // homepage van de website.
session_start();
include('config.php');
$vind_teller = mysql_query("SELECT * FROM teller");

while($row = mysql_fetch_assoc($vind_teller)){
    $huidig_teller = $row['Home'];
    $nieuw_teller = $huidig_teller + 1;
    $update_teller = mysql_query("UPDATE `teller` SET `Home` = $nieuw_teller");
}
if(!isset($_SESSION['login']) AND !isset($_SESSION['login2'])){
	include 'NaviNoScroll.php';
}
Else{
	include 'NaviNoScrollKlant.php';
}									//Roept de navigatiebalk aan
 	  include 'Homepage Slideshow.php';						//Roept de slideshow aan
 	  include 'Homepage informatie.php';					//Roept de informatie van 
 	  include 'Footer2.php';									//Roept Footer aan
?>








