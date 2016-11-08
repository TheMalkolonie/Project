<?php
session_start();
if(!isset($_SESSION['login2'])){
	include 'NaviNoScroll.php';
}
Else{
	include 'NaviNoScrollKlant.php';
}									//Roept de navigatiebalk aan
 	  include 'Homepage Slideshow.php';						//Roept de slideshow aan
 	  include 'Homepage informatie.php';					//Roept de informatie van 
 	  include 'Footer.php';									//Roept Footer aan
?>








