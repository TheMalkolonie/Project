<?php
session_start();
if(!isset($_SESSION['login2'])){
  include 'NaviNoScroll.php';
}
Else{
 include 'NaviNoScrollKlant.php';
}
function renderForm($id, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $Catagorie, $code, $error)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php

// if there are any errors, display them

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}

?>

<html>
<body>
<div class="container">
<!-- Titel bovenaan pagina. --> 
<center><H1><?php echo $Naam;?></H1></center>

<!-- Foto betreffende pizza + omschrijving pizza. --> 
<center><br/>
<center><img src ="images/2<?php echo $Product_Afbeelding;?>"</a></center><br/>
<H2>Omschijving:</H2>
<?php echo $Product_Beschrijving;?>

<!-- Prijs pizza --> 
<H2>prijs:</H2>
&euro;<?php echo $Prijs;?>

<!-- Type bodem pizza met drop down, standaard tekst: Please select  -->
<?php
            $result = mysql_query("SELECT * FROM pizzaextra") 
            or die(mysql_error());
            echo '<h2>Kies je bodem type en groote:</h2>';  
            echo '<select name="Bodem" required/>'; // Open your drop down box
            echo '<option value="" selected="selected" disabled="disabled">Selecteer Bodem</option>';
            while($row = mysql_fetch_array( $result )) {
              $Bodem = $row['Bodem'];
            echo '<option value="'.$Bodem.'">'.$Bodem.'</option>';
            }
            echo '</select>';// Close your drop down box
?> 

<!-- Saus soort kiezen met drop down, standaard tekst: Please select --> 
<?php
            $result = mysql_query("SELECT * FROM pizzaextra") 
            or die(mysql_error());
            echo '<h2>Kies je saus:</h2>';  
            echo '<select name="Saus" required/>'; // Open your drop down box
            echo '<option value="" selected="selected" disabled="disabled">Selecteer Saus</option>';
            while($row = mysql_fetch_array( $result )) {
              $Saus = $row['Saus'];
            echo '<option value="'.$Saus.'">'.$Saus.'</option>';
            }
            echo '</select>';// Close your drop down box
?> 

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
</div>
</body>
</html>
      

<?php

}


include('config.php');


if (isset($_POST['submit']))

{


if (is_numeric($_POST['id']))
 {


   $id = $_POST['id'];
   $Catagorie = mysql_real_escape_string(htmlspecialchars($_POST['Catagorie']));
   $Naam = mysql_real_escape_string(htmlspecialchars($_POST['Naam']));
   $Product_Afbeelding = mysql_real_escape_string(htmlspecialchars($_POST['Product_Afbeelding']));
   $Product_Beschrijving = mysql_real_escape_string(htmlspecialchars($_POST['Product_Beschrijving']));
   $Prijs = mysql_real_escape_string(htmlspecialchars($_POST['Prijs']));
   $code = mysql_real_escape_string(htmlspecialchars($_POST['code']));



if ($Catagorie == '' || $Naam == '' || $Product_Afbeelding == '' || $Product_Beschrijving == '' || $Prijs == '' || $code == '')

{



$error = 'ERROR: Please fill in all required fields!';



renderForm($id, $Catagorie, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $code, $error);

}

else

{



mysql_query("UPDATE product SET Catagorie='$Catagorie', Naam='$Naam', Product_Afbeelding='$Product_Afbeelding', Product_Beschrijving='$Product_Beschrijving', Prijs='$Prijs', code='$code' WHERE id='$id'") 
or die(mysql_error());



header("Location: chkprod.php");

}

}

else

{



echo 'Error!';

}

}

else


{





if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{


$id = $_GET['id'];

$result = mysql_query("SELECT * FROM product WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);





if($row)

{




   $Catagorie = $row['Catagorie'];
   $Naam = $row['Naam'];
   $Product_Afbeelding = $row['Product_Afbeelding'];
   $Product_Beschrijving = $row['Product_Beschrijving'];
   $Prijs = $row['Prijs'];
   $code = $row['code'];





renderForm($id, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $Catagorie, $code, '');

}

else


{

echo "No results!";

}

}

else



{

echo 'Error!';

}

}
    include 'Footer.php';                 //Roept Footer aan
?>