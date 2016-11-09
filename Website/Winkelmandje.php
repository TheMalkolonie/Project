<?php
session_start();				//Als klant is ingelogd, wordt 'NaviScrollKlant.php' gestart. Zo niet verschijnt 'NaviScroll.php'
if(!isset($_SESSION['login2'])){
	include 'NaviNoScroll.php';
}
Else{
	include 'NaviNoScrollKlant.php';
} ?>
<html>
		<center><h2><font size="6" face="arial">Mijn winkelmandje</font></h2></center>
<center><font size="3" face="arial">ITEMS HIER<br/></font></center>
</html>
<br/><br/><br/><br/>

<?php
include 'BestelButton.php';
include 'Footer2.php';						//De footer wordt opgehaald
?> 		