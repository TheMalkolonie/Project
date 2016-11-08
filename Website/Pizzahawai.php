<?php include 'NaviNoScroll.php'; 							//Roept de navigatiebalk aan
 
?>

<!DOCTYPE html>
<html>
<body>

<!-- Chiel: Titel bovenaan pagina. --> 
<center><H1>Pizza Hawai</H1></center>

<!-- Chiel: Foto betreffende pizza + omschrijving pizza. --> 
<center><br/>
<center><img src ="images/hawai.jpg" align="middle" hspace=3" vspace="3 width="150" height="300" border="1"></a></center><br/>
<H2>Omschijving:</H2>
Tomatensaus, mozzarella, ham, ananas & extra kaas.

<!-- Chiel: Prijs pizza --> 
<H2>prijs:</H2>
€ 7,95

<!-- Chiel: Type bodem pizza met drop down, standaard tekst: Please select  --> 
<h2>Kies je bodem type en groote:</h2>
<select name="Bodem">
<form action="action_page.php"
<option value="">
<option>-- Please select -- </option>
<option>Medium (25 cm)</option>
<option>Large (35 cm)</option>
<option>Family XXL</option>
</select><br/>

<!-- Chiel: Saus soort kiezen met drop down, standaard tekst: Please select --> 
<h2>Kies je saus:</h2>
<select name="Saus">
<form action="action_page.php"
<option value=""> 
<option>-- Please select -- </option>
<option>Tomatensaus</option>
<option>Barbecuesaus</option>
<option>Geen saus</option>
</select></br>

<!-- Aantal pizza's doormiddel van een invoer veld voor cijfers. --> 
<h2>Aantal pizza's</h2>
  <input type="number" name="quantity"
   min="0" max="100" step="0" value="--"><br/>

<!-- Opmerkingen invoegen voor pizza's. --> 
<br/>
<b>Opmerkingen:</b><br/>
<textarea name="Opmerking" rows="10" cols="40"></textarea><br/>

<!-- Reset en toevoegen buttons. --> 
<br/>
<INPUT TYPE="reset" VALUE="Reset">
<INPUT TYPE="submit" VALUE="Toevoegen"><br/>
	
</center>
</body>
</html>
<?php 
 	  include 'Footer.php';									//Roept Footer aan
?>
