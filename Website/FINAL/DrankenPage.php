<?php
session_start();
include('config.php');
$vind_teller = mysql_query("SELECT * FROM teller");

while($row = mysql_fetch_assoc($vind_teller)){
    $huidig_teller = $row['Drank'];
    $nieuw_teller = $huidig_teller + 1;
    $update_teller = mysql_query("UPDATE `teller` SET `Drank` = $nieuw_teller");
}
if(!isset($_SESSION['login']) AND !isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} ?>
<!DOCTYPE html>
<html>
<body>
<img src="images/Drinks.jpg" alt="Pizza" style="width:1920px;height:50%px;">
<style>
.prod{
	float: left;
	margin-left: 85px;
	padding: 10px;
	margin-top: -165px;
	border-style: outset;
	border-radius: 8px;

}
</style>
<?php
   include('config.php');
   include('spatie.html');
   $result = mysql_query("SELECT * FROM `product` WHERE `Catagorie`='Drank'") 
    or die(mysql_error());
    
  while($row = mysql_fetch_array( $result )) {
    $img = "<p><img src='images/2".$row['Product_Afbeelding']."'></p>";
    $imgurl = 'test3.php?id=' . $row['id'] . '';
    echo '<div class="prod">';
    echo "<p><a href='$imgurl' border='0'>$img</a></p>";
    echo '<p><center><a href="test3.php?id=' . $row['id'] . '">'.$row['Naam'].'</center></p></a>';
    echo '<p><center>&euro;' . $row['Prijs'] . '</center></p>';
    echo '</div>';
    } 
    include('footer2.php');
?>
</body>
</html>