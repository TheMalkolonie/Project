<?php								//Als klant is ingelogd, wordt 'NaviScrollKlant.php' gestart. Zo niet verschijnt 'NaviScroll.php'
if(!isset($_SESSION['login2'])){
	include 'NaviNoScroll.php';
}
Else{
	include 'NaviNoScrollKlant.php';
} ?>
<html>
<center><?php include('cart.php'); ?></center>
<br/><br/><br/><br/>

<?php
include 'BestelButton.php';
include 'Footer2.php';						//De footer wordt opgehaald
?> 		
