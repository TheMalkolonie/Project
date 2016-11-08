<?php 
session_start();
if(!isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} 
include 'Pizzapagina.php';					//Roept de informatie van 
include 'Footer2.php';									//Roept Footer aan
?>
