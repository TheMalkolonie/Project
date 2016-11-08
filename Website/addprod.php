<?php
include('config.php');
session_start();
if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
Else{
   include 'NaviScrollKlant.php';
}
include('templates/header2.inc.php');

if (isset($_POST['submit']))
{

   $Catagorie = mysql_escape_string($_POST['Catagorie']);
   $Naam = mysql_escape_string($_POST['Naam']);
   $Product_Afbeelding = mysql_escape_string($_POST['Product_Afbeelding']);
   $Product_Beschrijving = mysql_escape_string($_POST['Product_Beschrijving']);
   $Prijs = mysql_escape_string($_POST['Prijs']);
   
   $check = mysql_query("SELECT * FROM product WHERE Naam = '$Naam'")or die(mysql_error());
   if (mysql_num_rows($check)>=1) 
    echo '<p style="color: red; text-align: center">
     <font size="10"><b>Product bestaat al!</b></font>
     <br />
      </p>';
   
   else{
    
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["Product_Afbeelding"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   move_uploaded_file($_FILES["Product_Afbeelding"]["tmp_name"], $target_file);

   mysql_query("INSERT INTO `product` (`ID`, `Naam`, `Product_Afbeelding`, `Product_Beschrijving`, `Prijs`, `Catagorie`) VALUES (NULL, '$Naam', '$Product_Afbeelding', '$Product_Beschrijving', '$Prijs', '$Catagorie')") or die(mysql_error());
     echo '<p style="color: green; text-align: center">
     <font size="10"><b>Product toegevoegd!</b></font>
      </p>';
   header('Refresh: 3;url=chkprod.php');
   }
  }

  ?>
</html>
                                                                  <!-- enctype="multipart/form-data" -->
      <div class="container">
         <form class="form-signin" method="POST" action="addprod.php" enctype="multipart/form-data" >
            <h2><b>Product toevoegen</b></h2>
            <br />
            <strong>Catagorie:</strong>
                  <select value='Catagorie' class='input-block-level' name='Catagorie'>
                  <option value="Catagorie">Catagorie</option>
                  <option value="Pizza">Pizza</option>
                  <option value="Desserts">Desserts</option>
                  <option value="Drankjes">Drankjes</option>
                  <option value="Snacks">Snacks</option>
               </select>
            <strong>Product Naam:</strong><input type="text" autocomplete="off" class="input-block-level" name="Naam" required/>
            <strong>Afbeelding:</strong><input type="file" accept="image/*" name="Product_Afbeelding" id="Product_Afbeelding">
            <strong>Beschrijving:</strong><textarea autocomplete="off" class="input-block-level" name="Product_Beschrijving" required></textarea>
            <strong>Prijs:</strong><input type="text" autocomplete="off" class="input-block-level" name="Prijs" required/>
            <br />
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