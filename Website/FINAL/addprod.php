<?php
//Een product toevoegen
include('config.php');
session_start();

include('templates/header2.inc.php');

if (isset($_POST['submit']))
{
  $target = "images/".basename($_FILES['Product_Afbeelding']['name']); // hiermee wordt uw afbeelding lokaal opgeslagen.

   $Catagorie = mysql_escape_string($_POST['Catagorie']);
   $Naam = mysql_escape_string($_POST['Naam']);
   $Product_Afbeelding = $_FILES['Product_Afbeelding']['name'];
   $Product_Beschrijving = mysql_escape_string($_POST['Product_Beschrijving']);
   $Prijs = mysql_escape_string($_POST['Prijs']);
   $Code = mysql_escape_string($_POST['Code']);
   
   $check = mysql_query("SELECT * FROM product WHERE Code = '$Code'")or die(mysql_error());
   if (mysql_num_rows($check)>=1) 
    echo '<p style="color: red; text-align: center">
     <font size="10"><b>Product bestaat al!</b></font>
     <br />
      </p>';
   
   else{
        mysql_query("INSERT INTO `product` (`id`, `Code`, `Naam`, `Product_Afbeelding`, `Product_Beschrijving`, `Prijs`, `Catagorie`) VALUES (NULL,'$Code', '$Naam', '$Product_Afbeelding', '$Product_Beschrijving', '$Prijs', '$Catagorie')");
       move_uploaded_file($_FILES['Product_Afbeelding']['tmp_name'], $target);
       include('IMAGE-RESIZE-SCRIPT.php');
       echo '<script language="javascript">';
      echo 'alert("Product Opgeslagen!")'; // Zodra er een product wordt opgslagen krijgt u een melding.
      echo '</script>';
      echo '<meta http-equiv="refresh" content="0; url=chkprod.php" />'; // Na het klikken van 'oke' van uw melding, wordt u doorverwezen naar het product overzicht.
   }
  }
  ?>
  <!-- HTML Form -->
</html>
      <div class="container">
         <form class="form-signin" method="POST" action="addprod.php" enctype="multipart/form-data">
            <h2><b>Product toevoegen</b></h2>
            <br />
            <?php
            $result = mysql_query("SELECT * FROM catagorie") 
            or die(mysql_error());
            echo '<strong>Catagorie:<br/></strong>';  
            echo '<select name="Catagorie" required/>'; // Opent dropdown menu met gegevens vanuit onze database
            echo '<option value="" selected="selected" disabled="disabled">Selecteer Catagorie</option>';
            while($row = mysql_fetch_array( $result )) {
              $catagorie = $row['Catagorie'];
            echo '<option value="'.$catagorie.'">'.$catagorie.'</option>';
            }
            echo '</select>';// Sluit dropdown menu
            ?>
            <br/>
            <strong>Product Naam:</strong><input type="text" autocomplete="off" class="input-block-level" name="Naam" required/>
            <strong>Afbeelding:</strong><input type="file" accept="image/*" name="Product_Afbeelding" id="Product_Afbeelding" required/>
            <strong>Beschrijving:</strong><textarea autocomplete="off" class="input-block-level" name="Product_Beschrijving" required></textarea>
            <strong>Prijs:</strong><input type="text" autocomplete="off" maxlength="5" class="input-block-level" name="Prijs" required/>
            <strong>Product Code:</strong><input type="text" autocomplete="off" maxlength="6" class="input-block-level" name="Code"  required/>
            <br />
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/chkprod.php';" />
            <input class="btn btn-large btn-primary" type="submit" name="submit" value="Toevoegen" />
            </div>
            <br />           
         </form>
      </div>
      <?php include 'Footer2.php';                 //Roept Footer aan ?>;