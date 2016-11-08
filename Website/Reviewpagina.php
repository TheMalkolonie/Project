<!DOCTYPE html>
<html>
<body>

<!-- Chiel: Titel bovenaan pagina. --> 
<center>
<H1>Review product</H1><br/>


<!-- Chiel: Selecteer het betreffend product Please select  --> 
<h2>Selecteer het product dat je wilt beoordelen:</h2>
<select name="Selecteerpizza">
<form action="error.php"
<option value="">
<option>-- Please select -- </option>
<option>Pizza hawai</option>
<option>Pizza margherita</option>
<option>Pizza mozzarella</option>
<option>Pizza pepperoni</option>
<option>Pizza polo</option>
<option>Pizza salami</option>
</select><br/>

<!-- Chiel: Cijfer product doormiddel van een dropdown, standaard tekst: Please select  --> 
<h2>Geef het product een cijfer</h2>
<select name="Cijferpizza">
<form action="error.php"
<option value="">
<option>-- Please select -- </option>
<option>10</option>
<option>9</option>
<option>8</option>
<option>7</option>
<option>6</option>
<option>5</option>
<option>4</option>
<option>3</option>
<option>2</option>
<option>1</option>
</select><br/>

<br/>
<!-- Reactie product doormiddel van een tekstveld.. --> 
<br/>
<b>Wat vind je van het product?</b><br/>
<textarea name="Opmerkingpizza" rows="10" cols="40"></textarea><br/>

<!-- Reset en toevoegen buttons. --> 
<br/>
<INPUT TYPE="reset" VALUE="Reset">
<INPUT TYPE="submit" VALUE="Verzenden"><br/>
	
</center>
</body>
</html>