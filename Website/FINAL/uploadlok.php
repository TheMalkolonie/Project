<?php
include('config.php');
session_start();
if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
Else{
   include 'NaviNoScrollKlant.php';
}
include('templates/header2.inc.php');

      if (isset($_POST['submit2']))
      {
      $target_dir = "images/";
      $target_file = $target_dir . basename($_FILES["Afbeelding_Lokaal"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

       move_uploaded_file($_FILES["Afbeelding_Lokaal"]["tmp_name"], $target_file);
       header('location: chkprod.php');
     }
        ?>

          <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
            Upload nogmaals uw afbeelding. <br/>
         <strong>Afbeelding Lokaal:</strong><input type="file" accept="image/*" name="Afbeelding_Lokaal" id="Afbeelding_Lokaal">
          <input class="btn btn-large btn-primary" type="submit" value="Opslaan" name ="submit2"/>
          </form>