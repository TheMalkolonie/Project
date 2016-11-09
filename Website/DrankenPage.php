<?php
session_start();					//Als klant is ingelogd, wordt 'NaviScrollKlant.php' gestart. Zo niet verschijnt 'NaviScroll.php'
if(!isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} ?>
		<img src="images/Drinks.jpg" alt="Pizza" style="width:1920px;height:50%px;">
		<center><h2><font size="6" face="arial">Dranken</font></h2></center>
<center><font size="3" face="arial">Alle dranken komen hier!<br/></font></center>

    
<?php	include 'Footer2.php';				//De footer wordt opgehaald
?>			
