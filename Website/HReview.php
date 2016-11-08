<?php 
session_start();
if(!isset($_SESSION['login2'])){
  include 'NaviNoScroll.php';
  header('location: klogin.php');
  exit;
}
Else{
  include 'NaviNoScrollKlant.php';
}
include 'Reviewpagina.php';					//Roept de informatie van 
include 'Footer2.php';					    	//Roept Footer aan
?>