<!DOCTYPE html>
 <?php
session_start();
include('templates/header2.inc.php');
?>
<div class="container">
         <form class="form-signin" method="POST" action="index.php">
            <h2>Inloggen</h2>
            <?php include('clockwhite.php'); ?>
              <br />
              <input class="btn btn-large btn-primary" alt="Submit" value="Klanten" onclick="location.href = 'http://localhost/pizzaenco/klogin.php';" />
              <br />
              <br />
              <input class="btn btn-large btn-primary" type="" value="Administrator" onclick="location.href = 'http://localhost/pizzaenco/alogin.php';" /
            <br />           
         </form>
      </div>