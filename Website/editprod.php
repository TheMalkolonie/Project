<?php
session_start();
if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
Else{
   include 'NaviNoScrollKlant.php';
}

include('templates/header2.inc.php');

 function renderForm($ID, $Catagorie, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $error)
 {
 ?>

 <?php 

 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
<div class="container">
         <form class="form-signin" method="POST" action="">
         	<input type="hidden" name="id" value="<?php echo $ID; ?>"/>
            <h2>Product bewerken</h2>
            <br />
            <p><strong>ID:</strong> <?php echo $ID; ?></p>
            <strong>Catagorie:</strong>
                  <select value='Catagorie' class='input-block-level' name='Catagorie' value="<?php echo $Catagorie; ?>">
                        <option value="Catagorie">Catagorie</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Desserts">Desserts</option>
                        <option value="Drankjes">Drankjes</option>
                        <option value="Snacks">Snacks</option>
                    </select>
            <strong>Product Naam:</strong><input type="text" autocomplete="off" class="input-block-level" name="Naam" value="<?php echo $Naam; ?>" required/>
            <strong>Afbeelding:</strong><input type="file" name="imageUpload" id="imageUpload">
            <strong>Beschrijving:</strong><input type="text" autocomplete="off" class="input-block-level" name="Beschrijving" value="<?php echo $Product_Beschrijving; ?>" required/>
            <strong>Prijs:</strong><input type="text" autocomplete="off" class="input-block-level" name="Prijs" value="<?php echo $Prijs; ?>" required/>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/chkprod.php';" />
            <input class="btn btn-large btn-primary" type="submit" name="submit" value="Opslaan" />
         </form>
      </div>
 </form> 
 </body>
 </html> 
 <?php
 }


 include('config.php');
 
 if (isset($_POST['submit']))
 { 
 if (is_numeric($_POST['ID']))
 {

 $ID = $_POST['ID'];
 $Naam = mysql_real_escape_string(htmlspecialchars($_POST['Naam']));
 $Product_Afbeelding = mysql_real_escape_string(htmlspecialchars($_POST['Product_Afbeelding']));
 $Product_Beschrijving = mysql_real_escape_string(htmlspecialchars($_POST['Product_Beschrijving']));
 $Catagorie = mysql_real_escape_string(htmlspecialchars($_POST['Catagorie']));

 
 if ($Naam == '' || $Product_Afbeelding == '' || $Product_Beschrijving == '' || $Prijs == '' || $Catagorie == '')
 {

 $error = 'ERROR: Please fill in all required fields!';
 
 renderForm($ID, $Catagorie, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, $error);
 }
 else
 {

 mysql_query("UPDATE product SET Naam='$Naam', Product_Afbeelding='$Product_Afbeelding', Product_Beschrijving='$Product_Beschrijving', Prijs='$Prijs', Catagorie='$Catagorie' WHERE ID='$ID'")
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
 

 if (isset($_GET['ID']) && is_numeric($_GET['ID']) && $_GET['ID'] > 0)
 {

 $ID = $_GET['ID'];
 $result = mysql_query("SELECT * FROM product WHERE ID=$ID")
 or die(mysql_error()); 
 $row = mysql_fetch_array($result);
 

 if($row)
 {
 

 $Naam = $row['Naam'];
 $Product_Afbeelding = $row['Product_Afbeelding'];
 $Catagorie = $row['Catagorie'];
 $Product_Beschrijving = $row['Product_Beschrijving'];
 $Prijs = $row['Prijs'];

 renderForm($ID, $Catagorie, $Naam, $Product_Afbeelding, $Product_Beschrijving, $Prijs, '');
 }
 else

 {
 echo "No results!";
 }
 }
 else
 
 {
 }
 }
?>
