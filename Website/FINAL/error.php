<?php session_start(); // deze tekst van dit bestand komt op een page te staan die wij niet af hebben gekregen.
if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
Else{
   include 'NaviScrollKlant.php';
} ?>;
<!DOCTYPE html>
 <?php
session_start();
include('templates/header2.inc.php');
?>

<html>
<body>
</body>
</html>

      <div class="container">
         <form class="form-signin" method="POST" action="management.php">
          <h2><b>Oops!</b></h2>
          <?php include('clockwhite.php'); ?>
            <br />
            ------------------------------------------------------------
            <br />
            <br />
            Het lijkt er op dat deze pagina nog niet bestaat, prober het later opnieuw!
            <br />
            <br />
            ------------------------------------------------------------
            <br />
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="window.history.go(-1);" />
            </div>
            <br />           
         </form>
      </div>
      <!-- END OF CONTENT PART -->