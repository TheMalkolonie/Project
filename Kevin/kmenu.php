<!DOCTYPE html>
 <?php
session_start();
include('templates/header2.inc.php');

if(!isset($_SESSION['login2'])) {
  header('location: klogin.php');
  exit;
}
?>
<div class="container">
         <form class="form-signin" method="POST" action="kmenu.php">
            <h2>Welkom <u><?php echo $_SESSION['Gebruikersnaam2']; ?></u>!</h2>
            <h5>Wat wilt u gaan doen?</h5>
            <?php include('clockblack.php'); ?>
           <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Snel bestellen" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Nieuwe bestelling" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="button" value="Uitloggen" onclick="location.href = 'http://localhost/pizzaenco/logout.php';" />
            </div>        
         </form>
      </div>
