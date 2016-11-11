<html>
<body>
<!-- MYSQL CMD PRODUCTEN PER CATAGORIE
SELECT * FROM `product` WHERE `Catagorie`='Pizza'
SELECT * FROM `product` WHERE `Catagorie`='Dessert'
SELECT * FROM `product` WHERE `Catagorie`='Drank'
SELECT * FROM `product` WHERE `Catagorie`='Snack'
-->
	<?php
//   include('config.php');
//   $result = mysql_query("SELECT * FROM `product` WHERE `Catagorie`='Pizza'") 
//    or die(mysql_error());
//
//  while($row = mysql_fetch_array( $result )) {
//    echo "<img src='images/".$row['Product_Afbeelding']."'>";
//    echo "<p>".$row['Naam']."</p>";
//    echo '<p>&euro;' . $row['Prijs'] . '</p><br/>';
//    } 
?>

<!-- BOVEN IS OUD, ONDER IS NIEUW(WERKENDE) -->
<style>
.prod{
	float: left;
	padding: 10px;
	border:1px solid #cbcbcb;
}
</style>
<?php
   include('config.php');
   $result = mysql_query("SELECT * FROM `product` WHERE `Catagorie`='Pizza'") 
    or die(mysql_error());
    
  while($row = mysql_fetch_array( $result )) {
    $img = "<p><img src='images/2".$row['Product_Afbeelding']."'></p>";
    $imgurl = 'test3.php?id=' . $row['id'] . '';
    echo '<div class="prod">';
    echo "<p> <a href='$imgurl' border='0'>$img</a></p>";
    echo '<p><center><a href="test3.php?id=' . $row['id'] . '">'.$row['Naam'].'</center></p></a>';
    echo '<p><center>&euro;' . $row['Prijs'] . '</center></p><br/>';
    echo '</div>';
    } 
?>




</body>
</html>