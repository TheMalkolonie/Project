<?php
include('config.php'); //Er wordt connectie gemaakt met de database
$vind_teller = mysql_query("SELECT * FROM teller");

while($row = mysql_fetch_assoc($vind_teller)){
    $huidig_teller = $row['Snack'];
    $nieuw_teller = $huidig_teller + 1;
    $update_teller = mysql_query("UPDATE `teller` SET `Snack` = $nieuw_teller");
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
<img src="images/snacks.jpg" alt="Pizza" style="width:1920px;height:50%px;">
<link href="css/cart.css" type="text/css" rel="stylesheet" />
 	<?php
	include('cart_sessie.php');
    include('config.php');
   include('spatie.html');
 $product_array = $db_handle->runQuery("SELECT * FROM product WHERE Catagorie='Drank' ORDER BY id ASC");
 if (!empty($product_array)) { 
  foreach($product_array as $key=>$value){
 ?>
  <div class="product-item">
   <form method="post" action="DessertPage.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
   <div class="product-Product_Afbeelding"><img src='images/2"<?php echo $product_array[$key]["Product_Afbeelding"]; ?>"'></div>
   <div><strong><?php echo $product_array[$key]["Naam"]; ?></strong></div>
   <div class="product-Prijs"><?php echo "&euro;".$product_array[$key]["Prijs"]; ?></div>
   <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Toevoegens" class="btnAddAction" /></div>
   </form>
  </div>
 <?php
   }
 }
 include('footer2.php'); //De footer wordt opgehaald
 ?>
</body>
</html>