<!DOCTYPE html>
 <?php
session_start();
include('templates/header2.inc.php');

if(!isset($_SESSION['login2'])) {
  header('location: klogin.php');
  exit;
}
Else{
  include 'NaviNoScrollKlant.php';
}
?>
<div class="container">
         <form class="form-signin" method="POST" action="kmenu.php">
            <h2>Welkom <u><?php echo $_SESSION['Gebruikersnaam2']; ?></u>!</h2>
            <h5>Wat wilt u gaan doen?</h5>
            <?php include('clockwhite.php'); ?>
           <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Snel bestellen" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Nieuwe bestelling" onclick="location.href = 'http://localhost/pizzaenco/Menukaart.php';" />
            </div>
              <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Reviews" onclick="location.href = 'http://localhost/pizzaenco/HReview.php';" />
            </div>     
         </form>
      </div>
<?php include 'Footer2.php'; ?>