<?php
session_start();
include('spatie.html');
if(!isset($_SESSION['login2'])){
  include 'NaviScroll.php';
}
Else{
 include 'NaviScrollKlant.php';
}
include('templates/header2.inc.php');
/*
EDIT.PHP
Allows user to edit specific entry in database
*/
// creates the edit record form
// since this form is used multiple times in this file, I have made it a function that is easily reusable
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

// connect to the database
include('config.php');

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit']))

{
// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['id']))
 {

// get form data, making sure it is valid
   $id = $_POST['id'];
   $Catagorie = mysql_real_escape_string(htmlspecialchars($_POST['Catagorie']));
   $Naam = mysql_real_escape_string(htmlspecialchars($_POST['Naam']));
   $Product_Afbeelding = mysql_real_escape_string(htmlspecialchars($_POST['Product_Afbeelding']));
   $Product_Beschrijving = mysql_real_escape_string(htmlspecialchars($_POST['Product_Beschrijving']));
   $Prijs = mysql_real_escape_string(htmlspecialchars($_POST['Prijs']));
   $code = mysql_real_escape_string(htmlspecialchars($_POST['code']));

// check that firstname/lastname fields are both filled in

if ($Catagorie == '' || $Naam == '' || $Product_Afbeelding == '' || $Product_Beschrijving == '' || $Prijs == '' || $code == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';

//error, display form

renderForm($id, $Catagorie, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $code, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE product SET Catagorie='$Catagorie', Naam='$Naam', Product_Afbeelding='$Product_Afbeelding', Product_Beschrijving='$Product_Beschrijving', Prijs='$Prijs', code='$code' WHERE id='$id'") 
or die(mysql_error());


// once saved, redirect back to the view page
header("Location: chkprod.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM product WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db
   $Catagorie = $row['Catagorie'];
   $Naam = $row['Naam'];
   $Product_Afbeelding = $row['Product_Afbeelding'];
   $Product_Beschrijving = $row['Product_Beschrijving'];
   $Prijs = $row['Prijs'];
   $code = $row['code'];



// show form

renderForm($id, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $Catagorie, $code, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}
    include 'Footer.php';                 //Roept Footer aan
?>