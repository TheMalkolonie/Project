<?php
session_start();				//Als klant is ingelogd, wordt 'NaviScrollKlant.php' gestart. Zo niet verschijnt 'NaviScroll.php'
if(!isset($_SESSION['login2'])){
	include 'NaviNoScroll.php';
}
Else{
	include 'NaviNoScrollKlant.php';
} ?>


<html>
<body>
	<br/><br/>
	<center><font size="6" face="arial">Zijn dit de producten die u wilt bestellen?</font>
	<br/>
	<font size="3" face="arial">PRODUCTEN UIT DATABASE OPHALEN</font>
	
	
	
	<br/><br/><br/><br/><br/><br/><br/>
	<font size="6" face="arial">Mijn gegevens</font>
	<br/>
	<font size="3" face="arial">GEGEVENS UIT DATABASE OPHALEN</font>
	
	
	
	<br/><br/><br/><br/>
	<font size="3" face="arial">Bestellen via <br/></font>
	<form>
	<input type="radio" name="Betaalmethode" value="Afterpay" checked>Afterpay
	</form>
	</center>
	<br/><br/>
	
<?php
	
	
include 'VerzendenButton.php';	//De verzend knop wordt opgehaald
include 'Footer2.php';			//De footer wordt opgehaald
?> 		
</body>		
</html>
