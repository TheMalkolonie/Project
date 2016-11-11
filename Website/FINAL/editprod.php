<?php
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

// connect to the database
include('config.php');

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit']))

{
$target = "images/".basename($_FILES['Product_Afbeelding']['name']);
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
move_uploaded_file($_FILES['Product_Afbeelding']['tmp_name'], $target);
include('IMAGE-RESIZE-SCRIPT.php');


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

?>