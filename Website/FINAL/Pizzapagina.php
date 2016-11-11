<?php
session_start();
include('config.php'); //Verbinding wordt opgezet met de database, pagina wordt ingeladen.
$vind_teller = mysql_query("SELECT * FROM teller");

while($row = mysql_fetch_assoc($vind_teller)){
    $huidig_teller = $row['Pizza'];
    $nieuw_teller = $huidig_teller + 1;
    $update_teller = mysql_query("UPDATE `teller` SET `Pizza` = $nieuw_teller");
   }
if(!isset($_SESSION['login']) AND !isset($_SESSION['login2'])){
	include 'NaviScroll.php'; //Als de gebruiker NIET is ingelogd, wordt 'NaviScroll.php' opgehaald
}
Else{
	include 'NaviScrollKlant.php'; //Als de gebruiker WEL is ingelogd, wordt 'NaviScrollKlant.php' opgehaald
} ?>
<!DOCTYPE html>
<html>
<body>
<img src="images/Pizza Plaatje.jpg" alt="Pizza" style="width:1920px;height:50%;">
<style>
.prod{
	float: left;
	margin-left: 85px;
	padding: 10px;
	margin-top: -85px;
	border-style: outset;
	border-radius: 8px;

}
</style>
<center><font size="3" face="arial"><a href="pizzasamenstellen.php">Stel je eigen pizza samen!</a></center><br/>
<?php
   include('config.php');
   include('spatie.html');
   $result = mysql_query("SELECT * FROM `product` WHERE `Catagorie`='Pizza'") 
    or die(mysql_error());
    
  while($row = mysql_fetch_array( $result )) {
    $img = "<p><img src='images/2".$row['Product_Afbeelding']."'></p>";
    $imgurl = 'product.php?id=' . $row['id'] . '';
    echo '<div class="prod">';
    echo "<p><a href='$imgurl' border='0'>$img</a></p>";
    echo '<p><center><a href="product.php?id=' . $row['id'] . '">'.$row['Naam'].'</center></p></a>';
    echo '<p><center>&euro;' . $row['Prijs'] . '</center></p>';
    echo '</div>';
    } 
    include('footer2.php'); // Inladen van footer2, de balk onderin de webpagina.
?>
</body>
</html>