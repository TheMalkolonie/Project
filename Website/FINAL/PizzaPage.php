<?php
session_start();
if(!isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} ?>
		<img src="images/Pizza Plaatje.jpg" alt="Pizza" style="width:1920px;height:675px;">
		<center><h2><font size="6" face="arial">Pizza's</font></h2></center>
		<center><font size="3" face="arial"><a href="pizzasamenstellen.php">Stel je eigen pizza samen!</a></center><br/>
<center><font size="3" face="arial">Alle pizza's komen hier!<br/></font></center>

    
<?php	include 'Footer.php';?>