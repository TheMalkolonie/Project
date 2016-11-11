<?php
include('templates/header2.inc.php');
/*
Laat de gebruiker producten toevoegen
*/
// Dit maakt de edit form
// function omdat deze form vaker zal worden gebruikt
function renderForm($id, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $Catagorie, $code, $error)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php

// Laat errors zien als die er zijn.

if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}

?>

<div class="container">
         <form class="form-signin" method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
            <h2>Product bewerken</h2>
            <br />
            <p><strong>ID:</strong> <?php echo $id; ?></p>
            <?php
            $result = mysql_query("SELECT * FROM catagorie") 
            or die(mysql_error());
            echo '<strong>Catagorie:<br/></strong>';  
            echo '<select name="Catagorie" required/>'; // Open your drop down box
            echo '<option value="" selected="selected" disabled="disabled">Selecteer Catagorie</option>';
            while($row = mysql_fetch_array( $result )) {
              $catagorie = $row['Catagorie'];
            echo '<option value="'.$catagorie.'">'.$catagorie.'</option>';
            }
            echo '</select>';// Close your drop down box
            ?><br/>
            <strong>Product Naam:</strong><input type="text" autocomplete="off" class="input-block-level" name="Naam" value="<?php echo $Naam; ?>" required/>
            <strong>Afbeelding:</strong><input type="file" accept="image/*" name="Product_Afbeelding" id="Product_Afbeelding" required/>
            <strong>Beschrijving:</strong><input type="text" autocomplete="off" class="input-block-level" name="Product_Beschrijving" value="<?php echo $Product_Beschrijving; ?>" required/>
            <strong>Prijs:</strong><input type="text" autocomplete="off" maxlength="5" class="input-block-level" name="Prijs" value="<?php echo $Prijs; ?>" required/>
            <strong>Product Code:</strong><input type="text" autocomplete="off" maxlength="6" class="input-block-level" name="code" value="<?php echo $code; ?>" required/>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/chkprod.php';" />
            <input class="btn btn-large btn-primary" type="submit" name="submit" value="Opslaan" />
         </form>
      </div>

<?php

}

// connect met database
include('config.php');

// controleren of het formulier is ingediend. Als het verwerken van de vorm en op te slaan in de database
if (isset($_POST['submit']))

{
$target = "images/".basename($_FILES['Product_Afbeelding']['name']);
// bevestigen dat de 'id' waarde een geldige integer voordat je het formulier gegevens

if (is_numeric($_POST['id']))
 {

// krijgt vorm gegevens, zorg ervoor dat geldig is
   $id = $_POST['id'];
   $Catagorie = mysql_real_escape_string(htmlspecialchars($_POST['Catagorie']));
   $Naam = mysql_real_escape_string(htmlspecialchars($_POST['Naam']));
   $Product_Afbeelding = mysql_real_escape_string(htmlspecialchars($_POST['Product_Afbeelding']));
   $Product_Beschrijving = mysql_real_escape_string(htmlspecialchars($_POST['Product_Beschrijving']));
   $Prijs = mysql_real_escape_string(htmlspecialchars($_POST['Prijs']));
   $code = mysql_real_escape_string(htmlspecialchars($_POST['code']));

// controleer of voornaam / achternaam velden beide zijn ingevuld

if ($Catagorie == '' || $Naam == '' || $Product_Afbeelding == '' || $Product_Beschrijving == '' || $Prijs == '' || $code == '')

{

// genereren foutmelding

$error = 'ERROR: Please fill in all required fields!';

//error weergave form

renderForm($id, $Catagorie, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $code, $error);

}

else

{

// opslaan van de gegevens in de database

mysql_query("UPDATE product SET Catagorie='$Catagorie', Naam='$Naam', Product_Afbeelding='$Product_Afbeelding', Product_Beschrijving='$Product_Beschrijving', Prijs='$Prijs', code='$code' WHERE id='$id'") 
or die(mysql_error());
move_uploaded_file($_FILES['Product_Afbeelding']['tmp_name'], $target);
include('IMAGE-RESIZE-SCRIPT.php');


// eens gered, redirect terug naar de weergave pagina
header("Location: chkprod.php");

}

}

else

{

// als het "id" niet geldig is, weergave een fout melding

echo 'Error!';

}

}

else

// Als het formulier niet is ingediend, krijgt de gegevens uit de database en de vorm weergegeven

{



// krijgen de 'id' waarde van de URL (indien aanwezig), zorg ervoor dat deze geldig is (checing dat het numeriek / groter is dan 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysql_query("SELECT * FROM product WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);



// controleer of de 'id' overeen komt met een rij in de database

if($row)

{



// krijgt gegevens van database
   $Catagorie = $row['Catagorie'];
   $Naam = $row['Naam'];
   $Product_Afbeelding = $row['Product_Afbeelding'];
   $Product_Beschrijving = $row['Product_Beschrijving'];
   $Prijs = $row['Prijs'];
   $code = $row['code'];



// weergave form

renderForm($id, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $Catagorie, $code, '');

}

else

// als er geen match, weergave van het resultaat

{

echo "No results!";

}

}

else

// Als de 'id in de URL niet geldig is, of indien er geen "id" waarde, vertonen een fout

{

echo 'Error!';

}

}

?>