<?php
session_start();
if(!isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} ?>

		<img src="images/Dessert Plaatje.jpg" alt="Pizza" style="width:1920px;height:675px;">
		<center><h2><font size="6" face="arial">Desserts</font></h2></center>
<center><font size="3" face="arial">Alle desserts komen hier!<br/></font></center>

    
<?php	include 'Footer.php';?>