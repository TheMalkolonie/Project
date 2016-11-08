<?php 
session_start();
if(!isset($_SESSION['login2'])){
  include 'NaviNoScroll.php';
}
Else{
  include 'NaviNoScrollKlant.php';
}
include 'Reviewpagina.php';					//Roept de informatie van 
include 'Footer.php';					    	//Roept Footer aan
?>