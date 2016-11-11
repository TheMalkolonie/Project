<?php include('cart_sessie.php'); ?>
<HTML>
<HEAD>
<TITLE>Pizza&Co</TITLE>
<link href="css/cart.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Mijn winkelwagen <a id="btnEmpty" href="cart.php?action=empty">Winkelwagen legen</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?> 
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Naam</strong></th>
<th><strong>Code</strong></th>
<th><strong>Aantal</strong></th>
<th><strong>Prijs</strong></th>
<th><strong>Actie</strong></th>
</tr> 
<?php  
    foreach ($_SESSION["cart_item"] as $item){
  ?>
    <tr>
    <td><strong><?php echo $item["Naam"]; ?></strong></td>
    <td><?php echo $item["code"]; ?></td>
    <td><?php echo $item["quantity"]; ?></td>
    <td align=right><?php echo "€".$item["Prijs"]; ?></td>
    <td><a href="Winkelmandje.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
    </tr>
    <?php
        $item_total += ($item["Prijs"]*$item["quantity"]);
  }
  ?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "€".$item_total; ?></td>
</tr>
</tbody>
</table>  
  <?php
}
?>
</div>


</BODY>
</HTML>