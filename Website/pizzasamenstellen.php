<?php
session_start();
if(!isset($_SESSION['login2'])){
	include 'NaviScroll.php';
}
Else{
	include 'NaviScrollKlant.php';
} ?>
<!DOCTYPE html>

<html>
<body>


<!--afbeelding die je ziet-->

<h2>  </h2>

<p align="center">
	
Uw eigen pizza samenstellen? Dat kan! <br />
Met onze pizza samensteller kan je nu zelf <br />
pizza maken, kies de ingredienten <br />
en klik op bestel. <br />
Het laastste wat U hoeft te doen is genieten <br />
wanneer u de pizza warm op eet! <br />

</p>

<!--Formulier om pizza samen te stellen:-->

<!--Bodems-->
<div align="center">
<form action="Bestel.php">
	
	
	<select name="Bodem">
		<option value="Small">Small (25cm)</option>
		<option value="Medium">Medium (30cm)</option>
		<option value="Large">Large (35cm)</option>
	</select>
	


<!--Sauzen-->

	<select name="saus">
		<option value="Tomaten saus">Tomatensaus</option>
		<option value="Creme Fraiche">Creme Fraiche</option>
		<option value="Bbq saus">Bbq saus</option>
	</select>
	
<!--Bestel + aantal-->	
	
	<br />
	<input type="number" value="1" name="Aantal">
	<input type="submit" value="Bestel!"/>
</div>

<br />
<center>
Prijs komt hier
</center>


<!--Ingredienten-->

	<br />
	
	
<table style="width:100%">
	<td align="left">
	<input type="checkbox" name="cheese" value="Mozzarella" checked="Mozzarella"/>Kaas<br/>
	<input type="checkbox" name="Pepperoni" value="Pepperoni" />Pepperoni<br/>
	<input type="checkbox" name="Salami" value="Salami" />Salami<br/>
	<input type="checkbox" name="Gehakt" value="Gehakt" />Gehakt<br/>
	</td>
	<td align="left">
	<input type="checkbox" name="Ui" value="Ui" />Ui<br/>
	<input type="checkbox" name="Paprika" value="Paprika" />Paprika<br/>
	<input type="checkbox" name="Champignons" value="Champignons" />Champignons<br/>
	</td>
	<td align="left">
	<input type="checkbox" name="Ansjovis" value="Ansjovis" />Ansjovis<br/>
	<input type="checkbox" name="Tonijn" value="Tonijn" />Tonijn<br/>
	</td>
	<td align="left">
	<input type="checkbox" name="Olijf" value="Olijf" />Groene Olijf<br/>
	<input type="checkbox" name="Tomaat" value="Tomaat" />Verse Tomaat<br/>
	<input type="checkbox" name="Ananas" value="Ananas" />Ananas<br/>
	</td>
	
	
</table>
</Form>

</style>
</head>
</html>
<?php include 'Footer.php';	?>